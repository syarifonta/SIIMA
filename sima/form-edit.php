<?php

include_once("config.php");
$orderid = $_GET['orderid'];

$hasil = mysqli_query($koneksi, "SELECT * FROM app WHERE orderid=$orderid");

while($pengguna_data = mysqli_fetch_array($hasil))
{
	$orderid = $pengguna_data['orderid'];
    $userid = $pengguna_data['userid'];
    $nominal = $pengguna_data['nominal'];
    $email = $pengguna_data['email'];
}
?>

        <div class='cards'>
<div class='card-header'>
				<center><h3>Update Admin Panel</h3></center>
				<hr>
			</div>
			<div class="card-body">
				<form method="post" action="edit.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="userid" class="form-control" value=<?php echo $userid;?>>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-social"></i></span>
						</div>
						<input type="text" name="nominal" class="form-control" value=<?php echo $nominal;?>>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-social"></i></span>
						</div>
						<input type="text" name="email" class="form-control" value=<?php echo $email;?>>
					</div>
					<div class="form-group">
						<input type="hidden" name="orderid" value=<?php echo $orderid?>><input type="submit" name ="kirim" value="Update!" class="btn float-right login_btn">
					</div>
					
				</form>
			</div>
			</div>
		</div>
	</div>
</div>

    </form>