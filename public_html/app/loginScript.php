<?php
require_once  __DIR__ . '/database.php';
require_once __DIR__ . '/fb_setup.php';
require_once __DIR__ . '/gp_setup.php';
require_once __DIR__ . '/git_setup.php';


if(isset($_POST['submitBtn'], $_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //Login Validation
    try{
           $query = "SELECT * FROM users WHERE email = :email AND password = :password";
           $statement = $db->prepare($query);
           $statement->execute([':email' => $email, ':password' => $password]);
           //If registered and found fetch
           if($rg = $statement->fetch()){
           $_SESSION['avatar'] = $rg['avatar'];
           $_SESSION['username'] = $rg['username'];
           $_SESSION['id'] = $rg['id'];
           header('Location: index.php');
       }else{
           $error = "Invalid username or password";
       }
    //Error Display
    }catch (PDOException $e){
        die("Error " . $e->getMessage());
    }

}

