<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $User=$_SESSION['UserName'];
    ?>
    <meta charset="UTF-8">
    <title>Title</title>
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
            <h1 class="col-sm-8" style="font-size: 5vw;">My Mechanic</h1>
            <div class="col-sm-2" style="padding-top: 30px"><?php echo "$User"; ?><img style="max-height: 60%; max-width: 55%;" src="logout.png"></div>
            <div class="col-sm-2 LogIn" style="padding-top: 30px"> <a href="logout.php"> LogOut <img src="login.png"> </a> </div>
        </div>
    </div>
</header>
</body>
</html>
