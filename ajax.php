<?php
require_once "db.php";
$USERLogged = $_COOKIE['logged'];
$link = new mysqli($Hn , $User , $Pass , $Db );
if ($link->connect_error) die("fatal error");
$query = "SELECT * FROM `message`";
$results = $link->query($query);
$rows = $results->num_rows;
echo "<table>";
for ($i=0;$i<$rows;$i++){
    $data=$results->fetch_array(MYSQLI_NUM);
    echo "<tr>";
    if ($data[0]== $USERLogged){
        echo "<td></td>";
        echo "<td> $data[0] <br> $data[1] <br> $data[2] <br> </td>";
        continue;
    }
    echo "<td> $data[0] <br> $data[1] <br> $data[2] </td>";
    echo "<td></td>";
    echo "<tr>";
}
echo "</table>";

if (isset($_REQUEST["x"])){
    $message = $_REQUEST["x"];
    $deliveryTime = time();
    $insertQuery = "INSERT INTO `message` (`user` , `message` , `deliveryTime`) VALUES ('$USERLogged' , '$message' , $deliveryTime)";
    $link->query($insertQuery);
}
?>