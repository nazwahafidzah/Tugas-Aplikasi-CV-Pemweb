<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $emailParts = explode('@', $email);
    $domain = count($emailParts) == 2 ? $emailParts[1] : "";

    if ($password === $domain) {
        $_SESSION['email'] = $email;
        header("Location: form.php");
        exit();
    } else {
        $error = "Email atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; background-color: rgb(255, 255, 255); }
        .container { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 300px; margin: 100px auto; }
        input { width: 100%; padding: 8px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; }
        button { background:rgb(101, 168, 213); color: white; border: none; padding: 10px; border-radius: 5px; cursor: pointer; }
        button:hover { background: #218838; }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
