<?php
session_start();
require_once 'config.php';
include 'header.php';
$pdo = connectDB();


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the query to check if the broker exists
    $stmt = $pdo->prepare('SELECT * FROM brokers WHERE username = ? AND password = ? AND status = "active"');
    $stmt->execute([$username, $password]);
    $broker = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($broker) {
        // Broker exists, set session variables and redirect to dashboard
        $_SESSION['broker'] = $broker['username'];
        header('Location: dashboard.php');
        exit;
    } else {
        // Broker does not exist or is inactive, show error message
        $error_message = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Broker Login</title>
    <link rel="stylesheet" href="broker_login.css">
</head>
<body>

<div class="container">
    <h1>Broker Login</h1>

    <?php if (isset($error_message)): ?>
        <div class="error-message"><?php echo $error_message; ?></div>
    <?php endif; ?>

    <form method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" class="btn">Login</button>
    </form>
</div>

</body>
</html>
