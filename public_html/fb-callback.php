<?php

require_once __DIR__ . '/header.php';
require_once __DIR__ . '/app/fb_setup.php';
require_once __DIR__ . '/app/database.php';

$errors = '';
try{
  
  //take access token
  $userAccessToken = $handler->getAccessToken();
  
  //Check if access token is empty
  if(!$userAccessToken){
    //If Something go wrong
    if($handler->getError()){
      header('HTTP/1.0 401 Unathorized');
       $errors = "Errors: " .$handler->getError() . " Reason: " . $handler->getErrorReason() . " Description: " . $handler->getErrorDescription() ;
    }else{
      header('HTTP/1.0 400 Bad Request');
       $errors = "Something went wrong";
    }
  }else if ($userAccessToken){
      //check the expiration of the token 
    $oauth = $fb ->getOAuth2Client();
    $tokenMetadata = $oauth->debugToken($userAccessToken);

    //validate id
     $tokenMetadata->validateAppId($config['fb']['id']);
     $tokenMetadata->validateExpiration();

    //If not long lived access token request for one
    if (!$userAccessToken->isLongLived()){
      $userAccessToken = $oauth->getLongLivedAccessToken($userAccessToken);
    }


    //Login or Signup
    $response = $fb->get('/me?fields=id,email,name,picture.width(300).height(300)', (string) $userAccessToken);
    $user = $response->getGraphUser();

    //Check if user exists fetch. If you have more data we can save in User instead of users
    $exists = $db->prepare("SELECT * FROM users WHERE provider_id = :pid OR email = :email");
    $user->getEmail() != "" ? $email = $user->getEmail() : $email = "abcd"; 

    $exists->execute([':pid' => $user -> getId(), ':email' => $email]);

    //if registered
    if ($rg = $exists->fetch()){
      $_SESSION['avatar'] = $rg['avatar'];
      $_SESSION['username'] = $rg['username'];
      $_SESSION['id'] = $rg['id'];

      if(isset($_SESSION['errors'])) unset ($_SESSION['errors']);
      header("Location: http://ehealthpd-com.stackstaging.com/patient.php");
      
    }else{
      $insertQuery = "INSERT INTO users (username, email, provider, provider_id, avatar) 
                      VALUES(:username, :email, :provider, :provider_id, :avatar)";

      $statement = $db->prepare($insertQuery);
      $avatar = $user->getPicture();
      $statement->execute([
          ':username' => $user->getName(), ':email' => $user->getEmail(), ':provider' => 'Facebook', ':provider_id' => $user->getId(), 'avatar' => $avatar->getUrl()
      ]);

      if ($statement->rowCount() == 1){
        $_SESSION['avatar'] = $avatar->getUrl();
        $_SESSION['username'] = $user->getName();
        $_SESSION['id'] = $user->getId();

        if(isset($_SESSION['errors'])) unset ($_SESSION['errors']);
        header('Location: http://ehealthpd-com.stackstaging.com/patient.php');
      }
    }
  }else{
    $_SESSION['errors'] = "You did not authorized";
    header('Location: index.php');
  }
  
//Errors Display
}catch(\Facebook\Exceptions\FacebookResponseException $e){  //Exception for Graph Error and save
  
   $errors = "Facebook Graph returned an error: " . $e->getMessage();
  
}catch (\Facebook\Exceptions\FacebookSDKException $e){

   $errors = "Facebook SDK returned an error: " . $e->getMessage();
  
}catch (PDOException $e){
  
   $errors = "PDO Error: " . $e->getMessage();
}

//Display errors in header
if ($errors != ''){
  
  $_SESSION['errors'] = $errors;
  header('Location: index.php');
  
}

