<?php
session_start();
include 'connection.php'; // Make sure this connects to your MySQL database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = trim($_POST['new_account_username_input']);
    $password = $_POST['new_account_passsword_input'];

    if (empty($username) || empty($password)) {
        echo "Please fill in all fields!";
        exit();
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if username already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Username already exists!";
        $stmt->close();
        $conn->close();
        exit();
    }

    // Insert new user with role 'user'
    $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, 'user')");
    $stmt->bind_param("ss", $username, $hashed_password);

    if ($stmt->execute()) {
        echo "Account created successfully! You can now <a href='index.php'>login</a>.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>