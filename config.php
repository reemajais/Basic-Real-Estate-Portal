<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'realestate_db');

function connectDB() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "realestate_db";
    
      try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
$pdo = connectDB();
?>
