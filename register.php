<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
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
        body{
            background-color: #2F4F4F;
        }
        h1{
            font-size: 5em;
            margin: auto;
            max-width: 50%;
            max-height: 10%;
            text-align: center;
            padding-bottom: 5px;
            margin-top: 7%;
            color: #f5f5f0;
        }
        form{
            max-width: 50%;
            max-height:80%;
            margin: auto;
            border: #2F4F4F 1px solid;
            padding: 1%;
        }
    </style>
</head>
<body>
<h1>My Mechanic</h1>
<form class="mt-3" action="backend-register.php" method="POST" name="registrationForm">
    <div class="form-group">
        <input type="text" class="form-control" id="firstName" aria-describedby="firstNameHelp"
               placeholder="Firstname" name="firstname">
        <small id="firstNameHelp" class="form-text text-muted" style="display:none; color:red !important;"></small>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="lastName" aria-describedby="lastNameHelp"
               placeholder="Lastname" name="lastname">
        <small id="lastNameHelp" class="form-text text-muted" style="display:none; color:red !important;">We'll never
        </small>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="username" aria-describedby="userNameHelp"
               placeholder="User name" name="username">
        <small id="lastNameHelp" class="form-text text-muted" style="display:none; color:red !important;">We'll never
        </small>
    </div>

    <div class="form-group">
        <input type="email" class="form-control" id="exampleInputEmail1"
               aria-describedby="emailHelp" placeholder="Email" name="email">
        <small id="emailHelp" class="form-text text-muted" style="display:none; color:red !important;">
        </small>
    </div>

    <div class="form-group">
        <input type="location" class="form-control" id="exampleInputLocation1"
               aria-describedby="locationHelp" placeholder="Location" name="location">
        <small id="locationHelp" class="form-text text-muted" style="display:none; color:red !important;">
        </small>
    </div>

    <div class="form-group">
        <input type="password"
               class="form-control" id="passwordInput" placeholder="Password"
               name="password">
        <small id="passwordHelp" class="form-text text-muted" style="display:none; color:red !important;">
        </small>
    </div>

    <div class="form-group">
        <input type="password" class="form-control" id="confirmPasswordInput"
               placeholder="Confirm Password" name="confirm_password" aria-describedby="cpasswordHelp">
        <small id="cpasswordHelp" class="form-text text-muted" style="display:none; color:red !important;">
        </small>
    </div>

    <div class="float-left">
        <button type="submit" class="btn btn-primary" id="registerButton" name="registerButton">Register</button>
        <a href="login.php" class="ml-2"> <i class="fa fa-arrow-circle-left px-2"></i>I already have account</a>
    </div>

</form>
</body>
</html>