<?php
//The require_once statement is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again. 
//Link: http://php.net/manual/en/function.require-once.php
    require_once __DIR__ . '/header.php';
	require_once __DIR__ . '/app/gp_setup.php';
	require_once __DIR__ . '/app/loginScript.php';
    $errors = '';
try{
    //check if google is sending back a code
    if(isset($_GET['code'])){
        $client->fetchAccessTokenWithAuthCode($_GET['code']);
        
      	// if access token exists he is verified and fetch
        if($client->getAccessToken()){
            $_SESSION['google_access_token'] = $client->getAccessToken();
            $user = $client->verifyIdToken();
            
            $exists = $db->prepare("SELECT * FROM users WHERE provider_id = :pid OR email = :email");
            $user['email'] != "" ? $email = $user['email'] : $email = "1234";
            $exists->execute([':pid' => $user['sub'], ':email' => $email]);
            //Fetch information
            if($rg = $exists->fetch()){
                $_SESSION['avatar'] = $rg['avatar'];
                $_SESSION['username'] = $rg['username'];
                $_SESSION['id'] = $rg['id'];
                
                if(isset($_SESSION['errors'])) unset($_SESSION['errors']);
                header('Location: http://ehealthpd-com.stackstaging.com/physician.php');
            }
            //register user
          	//Alternatively if we have the other data I could save the data in User and not users file
            else{
                $insertQuery = "INSERT INTO users (username, email, provider, provider_id, avatar)
                        VALUES(:username, :email, :provider, :provider_id, :avatar)";
                
                $statement = $db->prepare($insertQuery);
                
                $statement->execute([
                    ':username' => $user['name'], ':email' => $user['email'], ':provider' => 'Google',
                    ':provider_id' => $user['sub'], ':avatar' => $user['picture']
                ]);
                
                if($statement->rowCount() == 1) {
                    $_SESSION['avatar'] = $user['picture'];
                    $_SESSION['username'] = $user['name'];
                    $_SESSION['id'] = $user['sub'];
                    
                    if(isset($_SESSION['errors'])) unset($_SESSION['errors']);
                    header('Location: http://ehealthpd-com.stackstaging.com/physician.php');
                }
            }
        }
    }
//Display Errors if any
}catch (PDOException $e){
    $errors = "PDO Error: " . $e->getMessage();
}catch (Exception $e){
    $errors = "General Exception: " . $e->getMessage();
}

if($errors != ''){
    $_SESSION['errors'] = $errors;
    header('Location: http://ehealthpd-com.stackstaging.com/physician.php');
}
