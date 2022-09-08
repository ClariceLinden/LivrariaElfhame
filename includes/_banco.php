<?php
$servername = "localhost";
$database = "livrariaelfhame";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername,  $database, $username, $password,);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>