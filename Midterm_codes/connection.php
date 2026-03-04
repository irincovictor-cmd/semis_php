<?php
$servername = "localhost";
$username = "root";   // default for XAMPP/WAMP
$password = "";       // usually empty for local server
$dbname = "user_system";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>