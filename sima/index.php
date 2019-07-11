<?php
        require 'functions.php';
        $opd = kueri("SELECT * FROM opd");

        if (isset($_POST["cari"])) {
             $opd = cari($_POST["keyword"]);
        }
 ?>


 <!DOCTYPE html>
 <html>
 <head>
          <title>Halaman Admin</title>
 </head>
 <body>
           <a href="logout.php">Logout</a>
           <h1>Daftar OPD</h1>

           <form action="" method="POST">
             <input type="text" name="keyword" placeholder="Search" size="30" autofocus autocomplete="off">
             <button type="submit" name="cari">Cari!</button>
           </form>
           <br>
           <a href="tambah.php">Tambah data OPD</a>
           <br><br>
           <table class="table">
                   <tr>
 	
    <th>No.</th>
 	<th>Tanggal</th>
 	<th>Nama OPD</th>
    <th>Alamat</th>
    <th>Action</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($opd as $daftaropd) : ?>
                    <tr>
 	<td><?= $i; ?></td>
 	
 	
 	<td><?= $daftaropd["Tanggal"]; ?></td>
 	<td><?= $daftaropd["NamaOPD"]; ?></td>
 	<td><?= $daftaropd["Alamat"]; ?></td>
     <td>
 		<button type="button" rel="tooltip" class="btn btn-success btn-simple">
                    <a href="ubah.php?id=<?= $daftaropd["id"]; ?>"><i class="material-icons">edit</i></a>
    <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                    <a href="hapus.php?id=<?= $daftaropd["id"]; ?>" onclick="return
                                    confirm('Hapus data ini?');"><i class="material-icons">delete</i></a>
                </button>
 		
 	</td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
            </table>

 </body>
 </html>
