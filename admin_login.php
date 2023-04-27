<?php
session_start();
require_once 'config.php';
include 'header.php';



// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Check if the username and password are correct
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {

        // Set the session variable
        $_SESSION['loggedin'] = true;

        // Redirect to the admin page
        header('Location: admin.php');
        exit();
    } else {
        // If the username or password is incorrect, show an error message
        echo 'Invalid login credentials.';
    }
}
?>

