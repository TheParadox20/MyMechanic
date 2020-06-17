<?php
//Columns FirstName LastName UserName Email Location Password
require_once "db.php";
$link = new mysqli($Hn , $User , $Pass , $Db );
$submit = "INSERT INTO User VALUES ()";
$link->query($submit);
?>