<?php
if($_GET['regnav']=='ok'){

header('Location: http://wezee.tk/index.php#id01');

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mining Engineering</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body style="  background-image:url('/images/bg.png'); background-size: 100%;">









<div style="position:fixed;left:0px;top:0px;width:100%;z-index:2;">
<div style="z-index:2;">


<?php
if( isset($_COOKIE['user_use']) && isset($_COOKIE['password_use']) )
{
include 'common_header_logged.php';

  }
  else{
include 'common_header_nologged.php';

  }
  ?>
