<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Admin</title>
    </head>
    <body>
        <h1>Halaman Admin</h1>
        <a href="logout.php">Logout</a>
        <h1>Selamat datang</h1>
    </body>
</html>