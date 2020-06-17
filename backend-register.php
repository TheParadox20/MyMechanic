<?php
//Columns FirstName LastName UserName Email Location Password
require_once "db.php";
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$un=$_POST['username'];
$Email=$_POST['email'];
$Location=$_POST['location'];
$pass=$_POST['password'];
$link = new mysqli($Hn , $User , $Pass , $Db );
$submit = "INSERT INTO `User` (`FirstName` , `LastName` , `UserName` , `Email` , `Location` , `Password`) VALUES ('$fn' , '$ln' , '$un' , '$Email' , '$Location' , '$pass')";
$link->query($submit);
$link->close();
?>