<?php
session_start();

if ($_SESSION['login']) {
    header("Location: /session/member.php");
    exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == 'wahyu' && $_POST['password'] = "wahyu") {
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'wahyu';
        header('Loacation : /session/member.php');
        exit();
    } else {
        $error = 'gagal login';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <?php if ($error != "") { ?>
        <h2><?= $error ?></h2>
    <?php } ?>
    <form action="/session/login.php" method="post">
        <label>
            Username
            <input type="text" name="username">
        </label>
        <label>
            password
            <input type="password" name="password">
        </label>
        <input type="submit" value="login">
    </form>
</body>

</html>