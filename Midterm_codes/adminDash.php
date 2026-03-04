<?php
require 'sessionChecker.php';

if ($_SESSION['user'] !== "admin") {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex flex-col">

    <div class="bg-gray-800 text-white p-4 flex justify-between">
        <h1>Admin Dashboard</h1>
        <a href="logout.php" class="bg-red-500 px-4 py-1 rounded">Logout</a>
    </div>

    <div class="flex-1 flex items-center justify-center">
        <h2 class="text-2xl">
            Welcome Admin 👑
        </h2>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (!sessionStorage.getItem('adminLoggedIn')) {
                alert('apple');
                sessionStorage.setItem('adminLoggedIn', 'true');
            }
        });
    </script>

</body>
</html>