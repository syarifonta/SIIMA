 <?php  
 include_once("config.php");
echo "<div class='card'>
<div class='card-header'><center><h1>ADMIN PANEL !</h1><center><hr>";
echo "<table class='table table-striped'>";
echo "<thead>
    <tr>
      <th scope='col'>ID</th>
      <th scope='col'>@Pengguna</th>
      <th scope='col'>Email</th>
      <th scope='col'>Komentar</th>
      <th scope='col'>Waktu</th>
      <th scope='col'>Update</th>
    </tr>
    <h6>@Dibuat oleh : Ardy</h6>
  </thead>";
 $hasil = mysqli_query($koneksi, "SELECT * FROM app ORDER BY orderid DESC");
    while($data_pengguna = mysqli_fetch_array($hasil)) {        
            echo "<tr>"; 
            echo "<td>".$data_pengguna['orderid']."</td>";
            echo "<td>".$data_pengguna['userid']."</td>";
            echo "<td>".$data_pengguna['nominal']."<br>"."</td>";
            echo "<td>".$data_pengguna['email']."</td>";
           
            echo "<td>";
            echo "<a href='form-edit.php?orderid=".$data_pengguna['orderid']."'><img src='res/icon/icon-edit.png' alt='Italian Trulli'width='20' height='20'></a>";
            echo "<a href='hapus.php?orderid=".$data_pengguna['orderid']."'><img src='res/icon/icon-delete.png' alt='Italian Trulli'width='20' height='20'></a>";

             echo "</td>";

            echo "</tr>";
}
echo "</table>";
    ?>