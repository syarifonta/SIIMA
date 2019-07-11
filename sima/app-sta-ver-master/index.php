<?php 
require('header.php');
include_once("config.php"); 
?>	<div class='cards'>
<div class='card-header'>
				<center><h3>Simple Tweet App</h3></center>
				<hr>
			</div>
			<div class="card-body">
				<form method="post" action="kirim.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="Username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-social"></i></span>
						</div>
						<input type="email" name="email" class="form-control" placeholder="Email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-social"></i></span>
						</div>
						<input type="text" name="komentar" class="form-control" placeholder="Komentar">
					</div>
					<div class="form-group">
						<input type="submit" name ="kirim" value="Tweet!" class="btn float-right login_btn">
					</div>
					
				</form>
			</div>
			</div>
		</div>
	</div>
</div>
<?php require('footer.php');?>
