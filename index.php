<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="./script.js"></script>
    <title>Your Website</title>
    <style>
      
    </style>
</head>
<body>
    <!-- Sidebar -->
    <!-- Sidebar -->
    <div id="sidebar">
        <!-- Profile picture -->
        <img id="profile-picture" src="default-profile.jpg" alt="Profile Picture" width="100">
        <button id="change-picture-button">Change Picture</button>

        <!-- Sidebar links -->
        <div class="sidebar-link">
        <a href="?page=dashboard">Dashboard</a>
        <a href="?page=account">Account</a>
        <a href="?page=goals">Goals & Saving</a>
        <a href="?page=expenses">Expenses</a>
        <a href="?page=investment">Investment</a>
        <a href="?page=setting">Setting</a>
        </div>
    </div>


    <!-- Content container -->
    <div id="content">
        <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard'; // Default to dashboard
            include("$page.php");
        ?>
    </div>
</body>
</html>
