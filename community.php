<?php
$USERLogged = $_COOKIE['logged'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Mechanic</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        header{
            background-color: #2F4F4F;
            color: white;
            margin-bottom: 1%;
            position: sticky;
            top: 0;
            z-index: 10;
        }
        a{
            text-decoration: none;
            color: white;
        }
        #chatRoom{
            background-image: url("white-and-grey-surface-2824173.jpg");
            min-height: 570px;
            max-height: 500px;
            background-size: contain;
            overflow: scroll;
        }
        #chatRoom::-webkit-scrollbar {
            display: none;
        }
        #chatRoom {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        form{
            position: sticky;
            bottom: 0;
            z-index: 1000;
        }
    </style>
    <script src="async.js"></script>
</head>
<body onload="receiver()">
<header>
    <div class="container">
        <div class="row">
            <h1 class="col-sm-8" style="font-size: 35px;">My Mechanic</h1>
            <div class="col-sm-4">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6" style="padding-top: 10px"><?php echo "$USERLogged"; ?><img style="max-height: 50px; max-width: 45px;" src="user.png"></div>
                        <div class="col-sm-6 LogIn" style="padding-top: 10px"> <a href="logout.php"> LogOut <img style="max-height: 50px; max-width: 45px;" src="logout.png"> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="col-lg-4"><button class="btn-primary" style="padding-left: 35px; padding-right: 35px; margin: auto; font-size: 25px" data-toggle="collapse" data-target="topics" >Top Mechanics</button> </div>
                <div id="topics" class="collapse">
                    <?php require "topic.php"?>
                </div>
            </div>
            <div class="col-md-6 " >
                <div id="chatRoom"></div>
                <form name="messenger" id="messenger" method="post">
                    <input type="text" style="min-width: 60%" name="message" id="message" placeholder="Enter message">
                    <button onclick="sender()"><img style="max-height: 25px; max-width: 35px" src="send.png"></button>
                </form>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>
</main>
</body>
</html>
