<?php
    session_start();
    if(isset($_SESSION['login'])){
        header("Location: user.php");
        exit;
    }

    require 'config.php';

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $hasil = mysqli_query($koneksi, "SELECT * FROM user WHERE username ='$username'");

        if(mysqli_num_rows($hasil) === 1){
            $baris = mysqli_fetch_assoc($hasil);
            if($password == $baris["password"]){
                $_SESSION["login"] = true;
                header("Location: user.php");
                exit;
            }
        }
        $error = true;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
<body>
    <h1>Halaman Login</h1>

    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username / Password Salah</p>
<?php endif; ?>

<form action = "" method="POST">
    <ul>
        <li>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
        </li>

        <li>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </li>
        <li>
            <button type="submit" name="login">Login!</button>
        </li>
        </ul>
</form>

    </body>
</html>

