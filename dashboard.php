<?php
// Start session
session_start();

// Check if user is logged in
if(!isset($_SESSION['user_id'])) {
  header('Location: broker_login.php');
  exit;
}

// Connect to database
require_once('config.php');
include 'header.php';

// Get user info
$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare('SELECT * FROM brokers WHERE id = ?');
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard | Real Estate Portal</title>
  <style>
      body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

p {
  margin-bottom: 20px;
}

.btn {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right: 10px;
}

.btn:hover {
  background-color: #45a049;
}

.logout {
  background-color: #f44336;
}

.logout:hover {
  background-color: #d32f2f;
}

  </style>
      
</head>
<body>

  <div class="container">
    <h1>Dashboard</h1>

    <p>Welcome, <?php echo $user['name']; ?>!</p>

    <a href="add_property.php" class="btn">Add Property</a>
    <a href="view_properties.php" class="btn">View Properties</a>

    <a href="broker_logout.php" class="btn logout">Logout</a>
  </div>

</body>
</html>
