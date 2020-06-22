<!DOCTYPE html>
<html>
<head>
    <?php
    $User=$_SESSION['UserName'];
    ?>
    <title>My Mechanic</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.0/mapbox-gl.css' rel='stylesheet' />
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
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <h1 class="col-sm-8" style="font-size: 35px;">My Mechanic</h1>
            <div class="col-sm-4">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6" style="padding-top: 10px"><?php echo "$User"; ?><img style="max-height: 50px; max-width: 45px;" src="../user.png"></div>
                        <div class="col-sm-6 LogIn" style="padding-top: 10px"> <a href="../logout.php"> LogOut <img style="max-height: 50px; max-width: 45px;" src="../logout.png"> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4"><h1>Under Construction</h1></div>
            <div class="col-lg-8" id='map' style='width: 800px; height: 600px;' ></div>
        </div>
    </div>
</main>
<script src="mapBox.js"></script>

</body>
</html>