<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>script/css/admin.css">
<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<h3>Daftar Guru</h3>
		<hr>
</div>
	<div class="row" style="background: white;padding-top: 20px;">
		<div class="col-md-12">
			<h4>Informasi Dasar Guru</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="background: white">
			<div class="table-responsive">
				<form method="post" action="<?php echo base_url() ?>admin/simpang">
				<table class="table table-borderless">
					<tr>	
						<td><h4>Nama</h4></td>
					</tr>
					<tr>	
						<td><input type="text" name="nama"></td>
					</tr>
					<tr>	
						<td><h4>NIP</h4></td>
					</tr>
					<tr>	
						<td><input type="text" name="nip"></td>
					</tr>
					<tr>	
						<td><h4>Kode Mata Pelajaran</h4></td>
					</tr>
					<tr>	
						<td><input type="text" name="kode_mapel"></td>
					</tr>
					<tr>	
						<td><h4>Username</h4></td>
					</tr>
					<tr>	
						<td><input type="text" name="username"></td>
					</tr>
					<tr>	
						<td><h4>Password</h4></td>
					</tr>
					<tr>	
						<td><input type="text" name="password"></td>
					</tr><input type="text" hidden name="tanggal" value="<?php echo date("Y/m/d"); ?>">
					<tr>	
						<td><h4>Agama</h4></td>
					</tr>
					<tr>	
						<td><input type="text" name="agama"></td>
					</tr>
					<tr>	
						<td><h4>Alamat</h4></td>
					</tr>
					<tr>	
						<td><textarea class="form-control" name="alamat"></textarea></td>
					</tr>
					<tr>	
						<td><h4>Email</h4></td>
					</tr>
					<tr>	
						<td><input type="email" name="email"></td>
					</tr>
					<tr>	
						<td><h4>Mata Pelajaran</h4></td>
					</tr>
					<tr>	
						<td><input type="text" name="mapel"></td>
					</tr>
					<tr>	
						<td><h4>Jenis Kelamin</h4></td>
					</tr>
					<tr><td><select name="jk" class="form-control">
							<option>Jenis Kelamin</option>
							<option value="Laki-laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select></td></tr>
					<tr>
						<td><h4>Golongan PNS</h4></td>
					</tr>	
					<tr>
						<td><input type="te" name="gol"></td>
					</tr>
					<tr>
						<td><h4>Nomor HP</h4></td>
					</tr>
					<tr>
						<td><input type="number" name="no_hp"></td>
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