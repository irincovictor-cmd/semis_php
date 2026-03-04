<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
$current_user = $_SESSION["user"];
$current_user_type = $_SESSION["role"];
?>