<!DOCTYPE html>
<html>
<head>
    <title>Real Estate Portal Login</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
        }

        form {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        label {
            display: block;
            font-size: 18px;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <h2>Admin Login</h2>
    <form method="POST" action="admin_login.php">
        <label>Username:</label>
        <input type="text" name="username">
        <label>Password:</label>
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>
