<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$dbname = "users";

$conn = mysqli_connect($server_name, $user_name, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
