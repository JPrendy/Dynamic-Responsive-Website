<?php
// $servername = "localhost";
// $username = "kilmorewestyouth";
// $password = "KilmoreWest2018!!";
// $dbname = "kilmorew_websiteDatabase";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testschooldatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>