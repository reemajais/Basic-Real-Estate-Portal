<?php
// Start the session
session_start();

// Include the database connection file
require_once('config.php');
include 'header.php';
// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // If the user is not logged in, redirect to the login page
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Real Estate Portal Admin Dashboard</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
        }

        p {
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        .logout-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        .logout-link a {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            text-decoration: none;
            cursor: pointer;
        }

        .logout-link a:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, Admin</h2>
        <p>This is the admin dashboard.</p>
        <div class="logout-link">
            <a href="admin_logout.php">Logout</a>
        </div>
    </div>
</body>
</html>

