<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: darkgrey;

        }
        .center{
            width:270px;
            height:150px;
            position:absolute;
            left:50%;
            top:50%;
            margin:-75px 0 0 -135px;
        }
    </style>
</head>
<body>
<div class="center">
    <div class="container">
        <h2>My Mechanic</h2>
        <form action="backend-login.php" method="post">
            <div class="form-group">
                <label for="email">User name:</label>
                <input name="user" type="email" class="form-control" id="email" placeholder="Enter username" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input name="pass" class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
