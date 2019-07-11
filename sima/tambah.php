<?php

         require 'functions.php';

         if (isset($_POST["tambah"])) {
             if (tambah($_POST) > 0) {
                 echo " <script>
		alert('Data gagal ditambahkan!');
		document.location.href = 'index.php';
	  </script>";
              } else {
                 echo " <script>
		alert('Data berhasil ditambahkan!');
		document.location.href = 'index.php';
	  </script>";
              }
         }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
        <title>Tambah data  OPD</title>
 </head>
 <body>
        <h1>Tambah data OPD</h1>
        <form action="tambah.php" method="POST">
               <ul>
                    <li>
                        <label for="Tanggal">Tanggal :</label>
                        <input type="date" name="Tanggal" id="Tanggal" required>
                    </li>
                    <li>
                        <label for="NamaOPD">Nama OPD :</label>
                        <input type="text" name="NamaOPD" id="NamaOPD" >
                    </li>
                    <li>
                        <label for="Alamat">Alamat :</label>
                        <input type="text" name="Alamat" id="Alamat" >
                    </li>
                    <li>
                        <button type="submit" name="tambah">Tambah Data</button>
                    </li>
              </ul>
       </form>
 </body>
 </html>
