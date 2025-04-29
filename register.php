<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($username && $email && $password) {
        $data = "$username|$email|$password\n";
        file_put_contents("users.txt", $data, FILE_APPEND);
        echo "Registration successful! <a href='login.php'>Login here</a>";
        exit;
    } else {
        echo "All fields are required!";
    }
}
?>

<h2>Register</h2>
<form method="POST">
    Username: <input type="text" name="username"><br>
    Email:    <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Register</button>
</form>
