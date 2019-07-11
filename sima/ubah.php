<?php
        include_once("config.php");
        $id = $_GET['id'];
        $hasil = mysqli_query($koneksi, "SELECT * FROM opd WHERE id=$id");
        while($opd = mysqli_fetch_array($hasil))
        {
           $id = $opd['id'];
           $Tanggal = $opd['Tanggal'];
            $NamaOPD = $opd['NamaOPD'];
            $Alamat = $opd['Alamat'];
        
        }

?>

 <!DOCTYPE html>
<html>
<head>
       <title>Ubah data OPD</title>
</head>
<body>
       <h1>Ubah data OPD</h1>
       <form action="ubahact.php" method="POST">
           <input type="hidden" name="id" value=<?php echo $id;?>>
           <ul>
               <li>
                  <label for="Tanggal">Tanggal :</label>
                  <input type="date" name="Tanggal" id="Tanggal" value=<?php echo $Tanggal;?>>
               </li>
               <li>
                  <label for="NamaOPD">Nama OPD:</label>
                  <input type="text" name="NamaOPD" id="NamaOPD" value=<?php echo $NamaOPD;?>>
                  
               </li>
               <li>
                  <label for="Alamat">Alamat :</label>
                  <input type="text" name="Alamat" id="Alamat" value=<?php echo $Alamat;?>>
                  
               </li>
               
               <li>
               <input type="hidden" name="id" value=<?php echo $id?>><input type="submit" name ="ubah" value="Update!" >
               </li>
           </ul>
      </form>
</body>
</html>
