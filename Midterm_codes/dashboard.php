<?php
require 'sessionChecker.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex flex-col">

    <div class="bg-blue-600 text-white p-4 flex justify-between">
        <h1>School Management System</h1>
        <a href="logout.php" class="bg-red-500 px-4 py-1 rounded">Logout</a>
    </div>

    <div class="text-center">
        <h1 class="text-2xl">
             Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?> 🎉
        </h1><br>
        <h1>
            <?php if($current_user_type == "admin") { ?>
                THIS IS ADMIN DASHBOARD!
            <?php } else { ?>
                      THIS IS USER DASHBOARD!
            <?php } ?>
        </h1>
    </div>

    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (!sessionStorage.getItem('userLoggedIn')) {
                alert('banana');
                sessionStorage.setItem('userLoggedIn', 'true');
            }
        });
    </script> -->

</body>
</html>