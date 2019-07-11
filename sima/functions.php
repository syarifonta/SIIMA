<?php 
include_once("config.php"); 

function kueri($query) {
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result) ) {
             $rows[] = $row;
        }
        return $rows;
 }

// Periksa data apakah terinput
function tambah($data) {
        global $koneksi;
        if(isset($_POST['tambah']))
        {
         $Tanggal = $_POST['Tanggal'];
         $NamaOPD = $_POST['NamaOPD'];
         $Alamat = $_POST['Alamat'];
 
        $tambah = mysqli_query($koneksi, "INSERT INTO opd (id,Tanggal,NamaOPD,Alamat) VALUES('','$Tanggal','$NamaOPD','$Alamat')");
 
        mysqli_query($koneksi, $tambah);
 
 return mysqli_affected_rows($koneksi);
 }
 }
 
 function cari($keyword) {
        $query = "SELECT * FROM opd WHERE
                       id LIKE '%$keyword%' OR
                       Tanggal LIKE '%$keyword%' OR
                       NamaOPD LIKE '%$keyword%' OR
                       Alamat LIKE '%$keyword%'";
 
                       return kueri($query);
 }

 function hapus($id) {
        global $koneksi;
        $query = "DELETE FROM opd WHERE id = $id";
 
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
 }

 function ubah($data) {
        global $koneksi;
        $id = $_GET['id'];
        // Check if form is submitted for user update, then redirect to homepage after update
        if(isset($_POST['ubah']))
        {
         $id = $_POST['id'];
         $Tanggal = $_POST['Tanggal'];
         $NamaOPD = $_POST['NamaOPD'];
         $Alamat = $_POST['Alamat'];
 
          $query = "UPDATE opd SET Tanggal = '$Tanggal', NamaOPD = '$NamaOPD',
                          Alamat = '$Alamat' WHERE id = '$id'";
 
          mysqli_query($koneksi, $query);
 
          return mysqli_affected_rows($koneksi);
        }
 
 }
 
 ?>

