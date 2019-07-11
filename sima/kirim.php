 <?php
include_once("config.php"); 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['kirim'])) {
        $userid = $_POST['userid'];
        $nominal = $_POST['nominal'];
        $email = $_POST['email'];

        // Insert user data into table
        $hasil = mysqli_query($koneksi, "INSERT INTO app (orderid,userid,nominal,email) VALUES('','$userid','$nominal','$email')");
    
        header("Location:komentar.php");
}?>