<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       session_start();
    ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
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
        .LandingImage{
            background: url("slider4.jpg");
            height: 562px;
            position: relative;
            margin-bottom: 1%;
        }
        .LandingImage p{
            font-size: 1.5em;
            position: absolute;
            bottom: 0;
            max-width: 500px;
            padding-left: 3%;
        }
        #Main{
            font-size: 2em;
        }
        .content{
            background-color:#f5f5f0 ;
            text-align: justify;
            min-height: 140%;
            position: relative;
            border-right: white 15px solid;
            border-bottom: white 15px solid;
        }
        #topic{
            color: #2F4F4F;
            font-size: xx-large;
            text-align: center;
        }
        .row .content img{
            display: block;
            max-height: 40px;
            max-width: 120px;
            position: absolute;
            bottom: 1%;
            right: 40%;
        }
        .col-lg-4{
            margin-top: 100px;
        }
        a{
            text-decoration: none;
            color: white;
        }
        #icons{
            position: absolute;
            top: -85px;
            min-height: 80px;
            min-width: 50px;
        }
        .LogIn img{
            max-height: 40%;
            max-width: 35%;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <h1 class="col-sm-10" style="font-size: 35px;">My Mechanic</h1>
            <div class="col-sm-2 LogIn" style="padding-top: 10px"> <a href="login/login.php">Client Login <img src="login.png"> </a> </div>
        </div>
    </div>
</header>
<main>
    <div class="LandingImage">
        <p><span id="Main"> Lorem ipsum dolor sit amet, consectetur adipiscing elit,</span> <br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-lg-4 col-mr-1 content"><img id="icons" src="sign-up.png"><span id="topic"><pre> Sign Up</pre></span>This adds the name and description of the bird family, Gaviidae, into the bird_families table. You may have noticed that although the family_id column is set to increment automatically, I put a value of 100 here. That’s not necessary, but it’s another way of instituting my style of starting with an identification number that has a few digits. A family_id of 1 for an elegant and ancient bird family like that of the loons sounds either presumptuous or lame to me.<br><br><br><br><a href="register/register.php"><img src="button.png"></a></div>
            <br>
            <div class="col-lg-4 content"><img id="icons" src="services.png"><span id="topic"><pre> Services</pre></span>Duck, another bird we entered already in the birds table. Suppose further that we had tried to give the data in a different order from the way the columns are organized in the table. The server would accept the SQL statement and process the data as best it can, but it would not work the way we might want<br><br><br><a href="login/login.php"><img src="button.png"></a> </div>
            <br>
            <div class="col-lg-4 content"><img id="icons" src="chat.png"><span id="topic"><pre> Community</pre></span>Here we can see the warning message: the server was expecting an integer value, but received text for the column, family_id. Let’s run the SELECT statement to see what we have<br><br><br><br><a href="login/login.php"><img src="button.png"></a> </div>
        </div>
    </div>
</main>
<footer>

</footer>
</body>
</html>
