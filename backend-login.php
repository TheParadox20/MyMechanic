<?php
require_once "db.php";
$link = new mysqli($Hn , $User , $Pass , $Db );
if ($link->connect_error) die("fatal error");
$Ur = $_POST['user'];
$pass = $_POST['pass'];
$passQuery = "SELECT Password FROM User WHERE UserName='$Ur'";
$results = $link->query($passQuery);
$data=$results->fetch_array(MYSQLI_NUM);
if (password_verify($pass, $data[0])) {
    session_start();
    setcookie('logged' , $Ur , time()+3600);
    $_SESSION['UserName'] = $Ur;
    include_once "services.php";
}
?>
