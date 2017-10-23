<?php ob_start();
//The require_once statement is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again. 
//Link: http://php.net/manual/en/function.require-once.php
require_once __DIR__ . '/app/init.php';
$config = require __DIR__ . '/app/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eHealth PD</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/mystyle.css" rel="stylesheet" type="text/css">
  	<link href="css/bootstrap-social.css" rel="stylesheet" type="text/css">
</head>
<body>