<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>script/css/admin.css">
<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
	<div class="col-md-10 offset-md-1" >
		<div class="row" style="margin-bottom: 50px;">
			<h3>Daftar Admin</h3>
		</div>
		<div class="row">
			<div class="col-md-12" style="background: white">
				<div class="table-responsive">
					<form method="post" action="<?php echo base_url() ?>admin/simpanadmin">
					<table class="table table-borderless">
						
						<tr>
							<td><h5>Username</h5></td>
							<td><h5>Nama Lengkap</h5></td>
						</tr>
						<tr>
							<td><input type="text" name="username" placeholder="Username"></td>
							<td><input type="text" name="nama" placeholder="Nama Lengkap"></td>
						</tr>
						<tr>
							<td><h5>Password</h5></td>
							<td><h5>Email</h5></td>
						</tr>
						<tr>
							<td><input type="password" name="pass" placeholder="Password"></td>
							<td><input type="text" name="email" placeholder="Email"></td>
						</tr>
						<tr>
							<th><!-- <audio controls>
	  								<source src="<?php echo base_url() ?>img/sm.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
								</audio> --></th><th></th>
						</tr>
						<tr>
							<td><button class="btn btn-primary" type="submit" name="simpan">Simpan</button></td><td colspan="3"><button class="btn btn-alert" type="reset">Ulangi</button></td>
						</tr>
					</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>