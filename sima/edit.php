<?php
// include database connection file
include_once("config.php");
$id = $_GET['id'];
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['kirim']))
{   
    $orderid=$_POST['orderid'];
    $userid=$_POST['userid'];
    $nominal=$_POST['nominal'];
    $email=$_POST['email'];

    // update user data
    $sql = "UPDATE app SET orderid='$orderid', userid='$userid', nominal='$nominal', email='$email' WHERE orderid='$orderid'";
    $hasil = mysqli_query($koneksi, $sql);

    // Redirect to homepage to display updated user in list
    header("Location: komentar.php");
}
?>