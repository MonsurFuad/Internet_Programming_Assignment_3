<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);

    foreach ($users as $user) {
        list($u, $e, $p) = explode("|", $user);
        if ($e == $email) {
            echo "Your password is: <strong>$p</strong>";
            exit;
        }
    }
    echo "Email not found.";
}
?>

<h2>Recover Password</h2>
<form method="POST">
    Enter your email: <input type="email" name="email"><br>
    <button type="submit">Recover</button>
</form>
