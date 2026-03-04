<?php
session_start();
include 'connection.php'; // your DB connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Check the hashed password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] === 'admin') {
                header("Location: dashboard.php");
            } else {
                header("Location: dashboard.php");
            }
            exit();
        } else {
            header("Location: index.php?error=wrongpassword");
            exit();
        }
    } else {
        header("Location: index.php?error=nouser");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>