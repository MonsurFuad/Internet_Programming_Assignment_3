<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);

    foreach ($users as $user) {
        list($u, $e, $p) = explode("|", $user);
        if ($u == $username && $p == $password) {
            $_SESSION['user'] = $username;
            header("Location: dashboard.php");
            exit;
        }
    }
    echo "Invalid username or password.";
}
?>

<h2>Login</h2>
<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Login</button>
</form>
<a href="recover.php">Forgot Password?</a>
