<?php
//Errors to display if connectivity problems with database exists
try{
  	//PHP Data Objects
    $db = new PDO($config['database']['dsn'], $config['database']['username'],
        $config['database']['password']);
    
    //set pdo error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Errors
}catch (PDOException $e){
    die("Connection failed ".$e->getMessage());
}