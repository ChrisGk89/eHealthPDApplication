<?php
//The require_once statement is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again. 
//Link: http://php.net/manual/en/function.require-once.php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/app/git_setup.php';
require_once __DIR__ . '/app/loginScript.php';
$errors = '';

try{
    //if users authorize us to get their credentials
    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $state = $_GET['state'];
        //if not state or not equal with unique token then error and redirect to index.php
        if(!$state || $state != $_SESSION['state']){
            $errors = "Cross apps request problem";
            header('Location: index.php');
        }
        
      	//HTTP Guzzle Client for simple login to github
        $client = new GuzzleHttp\Client();
      	//Return JSON object
        $headers[] = 'Accept: application/json';
        $headers[] = 'User-Agent: eHealthPD GH';
        
      	//Same values as FB and Google with the proper modifications
        $query = [
            'client_id' => $config['github']['id'],
            'client_secret' => $config['github']['secret'],
            'redirect_uri' => $config['github']['callback_url'],
            'state' => $_SESSION['state'],
            'code' => $code
        ];
        
        //request access token
        $requestToken = $client->post('https://github.com/login/oauth/access_token', [
            'allow_redirects' => true, 'headers' => [ 'Accept' => 'application/json'],
            'body' => $query
        ]);
        
      	//JSON decode of the token
        $token = json_decode($requestToken->getBody());
        $_SESSION['github_access_token'] = $token->access_token;
        
      	
       //Get all user information if access token is set
        if(isset($_SESSION['github_access_token'])){
          	//User details
            $requester = $client->get('https://api.github.com/user?access_token='.$_SESSION['github_access_token'],
                ['allow_redirects' => false, $headers]);
            //Email information   
            $requesterEmail = $client->get('https://api.github.com/user/emails?access_token='.
                $_SESSION['github_access_token'], ['allow_redirects' => false, $headers]);
            
            $user = json_decode($requester->getBody());
            $emails = json_decode($requesterEmail->getBody());
            
            foreach ($emails as $email){
                if($email->primary == true){
                    $user->email = $email->email;
                }
            }
            
            $exists = $db->prepare("SELECT * FROM users WHERE provider_id = :pid OR email = :email");
 			//If email isn't empty and it has something inside          
            $user->email != '' ? $email = $user->email : $email = "1234";
            $exists->execute([':pid' => $user->id, ':email' => $email]);
            //If exists fetch the data
            if($rg = $exists->fetch()){
                $_SESSION['avatar'] = $rg['avatar'];
                $_SESSION['username'] = $rg['username'];
                $_SESSION['id'] = $rg['id'];
        
                if(isset($_SESSION['errors'])) unset($_SESSION['errors']);
                header('Location: http://ehealthpd-com.stackstaging.com/researcher.php');
            }
          //If not register the user to the database. If we have more data we can store in User instead of users
          else{
                $insertQuery = "INSERT INTO users (username, email, provider, provider_id, avatar)
                        VALUES(:username, :email, :provider, :provider_id, :avatar)";
    
                $statement = $db->prepare($insertQuery);
    
                $statement->execute([
                    ':username' => $user->name, ':email' => $user->email, ':provider' => 'GitHub',
                    ':provider_id' => $user->id, ':avatar' => $user->avatar_url
                ]);
    
                if($statement->rowCount() == 1) {
                    $_SESSION['avatar'] = $user->avatar_url;
                    $_SESSION['username'] = $user->name;
                    $_SESSION['id'] = $user->id;
        
                    if(isset($_SESSION['errors'])) unset($_SESSION['errors']);
                    header('Location: http://ehealthpd-com.stackstaging.com/researcher.php');
                }
            }
        }
    }
//Display Errors if any
}catch (\GuzzleHttp\Exception\ClientException $e){
    $errors = "GuzzleHttp ClientException Exception: " . $e->getMessage();
}
catch (PDOException $e){
    $errors = "PDO Error: " . $e->getMessage();
}catch (Exception $e){
    $errors = "General Exception: " . $e->getMessage();
}

if($errors != ''){
    $_SESSION['errors'] = $errors;
    header('Location: index.php');
}
