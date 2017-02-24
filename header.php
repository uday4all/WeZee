
<?php include('functions/wezee/global_functions.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>WeZee | The Public Talks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="umix.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- WeZee personal scripts  -->
<?php 
if(check_if_logged()){
include('header_logged.php');
}
else{
include('header_not-logged.php');
}
?>

