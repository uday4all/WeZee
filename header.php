
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
        check_if_logged();
        ?>

    </head>


    <body>

        <header>

            <nav class="navbar navbar-default ">
                <div class="container-fluid w_mainbar">
                    <div class="navbar-header">

                        <div class="navbar-brand">WeZee</div>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                    </div>
                    <!--
                        <ul class="nav navbar-nav">      
                    <li class="active"><a href="#">Home</a></li>
                          <li><a href="#">Page 1</a></li>
                          <li><a href="#">Page 2</a></li>
                          <li><a href="#">Page 3</a></li>
                        </ul> -->
                    <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="myNavbar">
                        <li><a href="javascript:void(0);"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="javascript:void(0);"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>  
                </div>
            </nav>

        </header>
