<?php
// Start the session
session_start();

// Hardcoded credentials
$valid_username = "admin";
$valid_password = "admin";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['role'] = 'admin'; 
        // Redirect to the admin dashboard
        header("Location: /trident/public/admin/index.php");
        exit(); // Ensure no further code is executed
    } else {
        // Output JavaScript alert
        echo "<script>alert('Invalid username or password.');</script>";
        // Redirect back to the login page (optional)
        echo "<script>window.location.href = 'http://localhost/trident/public/admin/login.php';</script>";
        exit();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* Login form styles */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .login-form {
            background: white;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-form input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-form button {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }

        .login-form button:hover {
            background: #0056b3;
        }

        .login-form p {
            text-align: center;
            margin-top: 10px;
            font-size: 0.9em;
            color: #555;
        }
    </style>
</head>
<body>
    <form  method="POST" class="login-form">
        <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <button type="submit">Login</button>
    </form>
</body>
</html>
