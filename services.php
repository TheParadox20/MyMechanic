
<!-- TODO create links to each service
       create a customer center web page
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    $User=$_SESSION['UserName'];
    ?>
    <meta charset="UTF-8">
    <title>My Mechanic</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
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
        .col-lg-4{
            margin-top: 10px;
        }
        .col-lg-4 h2{
            color: #00ff00;
            text-align: center;
        }
        .content{
            background-color: #e0e0d1;
            font-size: large;
            min-height: 300px;
            max-height: 310px;
        }
        h2 img{
            max-height: 50px;
            max-width: 120px;
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
                        <div class="col-sm-6" style="padding-top: 10px"><?php echo "$User"; ?><img style="max-height: 50px; max-width: 45px;" src="user.png"></div>
                        <div class="col-sm-6 LogIn" style="padding-top: 10px"> <a href="logout.php"> LogOut <img style="max-height: 50px; max-width: 45px;" src="logout.png"> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-lg-4 ">
                <a href="map.php"><h2> <img src="images/wrench.png"> <br> Find your Mechanic</h2></a>
                <div class="content">
                    I never spend much time in school but I taught ladies plenty. It’s true I hire my body out for pay, hey hey. I’ve gotten burned over Cheryl Tiegs
                    <br><br><br><br><br><br>
                </div>
            </div>
            <div class="col-lg-4 ">
                <a href="mall.php"><h2><img src="images/supermarket.png"> <br> Shopping</h2></a>
                <div class="content">
                    He just keeps on movin’, ladies keep improvin’, every day is better than the last. New dreams and better scenes, and best of all I don’t pay property tax. Rollin’ down to Dallas
                    <br><br><br><br><br><br>
                </div>
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-lg-4 ">
                <a href="#"><h2> <img src="images/technical-support.png"> <br> Consult A Mechanic</h2></a>
                <div class="content">
                    There’s a voice that keeps on calling me. Down the road, that’s where I’ll always be. Every stop I make, I make a new friend. Can’t stay for long, just turn around and I’m gone again.
                    <br><br><br><br><br><br>
                </div>

            </div>
            <div class="col-lg-4 ">
                <a href="tow.php"><h2> <img src="images/tow.png"> <br> Towing Service</h2></a>
                <div class="content">
                    I never spend much time in school but I taught ladies plenty. It’s true I hire my body out for pay, hey hey. I’ve gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it’s only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine.
                    <br><br><br><br><br><br>
                </div>
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-lg-4" style="margin-bottom: 100px">
                <a href="community.php"><h2><img src="images/meeting.png"> <br> Community</h2></a>
                <div class="content">
                    There’s a voice that keeps on calling me. Down the road, that’s where I’ll always be. Every stop I make, I make a new friend. Can’t stay for long, just turn around and I’m gone again. Maybe tomorrow, I’ll want to settle down, Until tomorrow, I’ll just keep moving on.
                    <br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
                                                                                                                                                                                                                     