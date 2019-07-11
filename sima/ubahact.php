<?php
// include database connection file
include_once("config.php");
$id = $_GET['id'];
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['ubah']))
{   
    $id = $_POST['id'];
         $Tanggal = $_POST['Tanggal'];
         $NamaOPD = $_POST['NamaOPD'];
         $Alamat = $_POST['Alamat'];
    // update user data
    $sql = "UPDATE opd SET id='$id', Tanggal='$Tanggal', NamaOPD='$NamaOPD', Alamat='$Alamat' WHERE id='$id'";
    $hasil = mysqli_query($koneksi, $sql);

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>