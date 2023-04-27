<?php
// Start the session
session_start();
include 'header.php';
// Destroy the session
session_destroy();

// Redirect to the login page
header('Location: index.php');
exit();
?>
