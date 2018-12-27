<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>script/css/admin.css">
<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
	<div class="container" style="background-color: white; border-width: 1px; border-color: #b8b894; padding: 15px 15px 10px 10px; box-shadow: 0.5px 0.5px 0.5px 0.5px grey;">
		<h3 style="color: #2F669F;"><b>Daftar Murid</b></h3>
	</div>
</div>
	<div class="row" style="background: white;padding-top: 20px;">
		<div class="col-md-12">
			<table class="table table-borderless">
				<td><h4><center>Data Sekolah</center></h4></td>
					<?php  if (validation_errors()!="") {
					echo "<div class='alert'></span><strong>ERROR !</strong> ".validation_errors()." </div>";
					} ?>
				<td><h4><center>Data Orangtua</center></h4></td>
			</table>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="background: white">
			<div class="table-responsive">
				<form method="post" action="<?php echo base_url() ?>admin/simpanm">
				<table class="table table-borderless">
					<tr>
						<td><h5>NISN</h5></td>
						<td><h5>Nama Ayah</h5></td>
					</tr>
					<tr>
						<td><input type="number" min="123710000" maxlength="123718000" name="nisn" placeholder="NISN"></td>
						<td><input type="text" placeholder="Nama Ayah" name="ayah"></td>
					</tr>
					<tr>
						<td><h5>NIS</h5></td>
						<td><h5>Pendidikan Ayah</h5></td>
					</tr>
					<tr>
						<td><input type="number" min="123710000" maxlength="123718000" name="nis" placeholder="NIS"></td>
						<td><input type="text" placeholder="Pendidikan Ayah" name="penayah"></td>
					</tr>
					<tr>
						<td><h5>Username</h5></td>
						<td><h5>Pekerjaan Ayah</h5></td>
					</tr>
					<tr>
						<td><input type="text" name="username" placeholder="Username"></td>
						<td><input type="text" name="payah" placeholder="Pekerjaan Ayah"></td>
					</tr>
					<tr>
						<td><h5>Password</h5></td>
						<td><h5>Alamat Ayah</h5></td>
					</tr>
					<tr>
						<td><input type="text" name="pass" placeholder="Password"></td>
						<td><textarea class="form-control" name="aayah" style="width: 400px; height: 100px;"></textarea></td>
					</tr>
					<tr>
						<td><h5>Jurusan</h5></td>
						<td><h5>Nomor HP Ayah</h5></td>
					</tr>
					<tr>
						<td><select name="jurusan" class="form-control" style="width: 400px;">
							<option>Jurusan</option>
							<option value="IPA">IPA</option>
							<option value="IPS">IPS</option>
						</select></td>
						<td><input type="text" name="nohpa" placeholder="Nomor HP Ayah"></td>

					</tr>
					<tr>
						<td><h5>Tahun Angkatan</h5></td>
						
					</tr>
					<tr>
						<td><input type="text" name="tahun" placeholder="Tahun Angkatan"></td>
											</tr>
					<tr>
						<td><h5>Asal Sekolah</h5></td>
						<td><h5></h5></td>
					</tr>
					<tr>
						<td><input type="text" name="sekolah" placeholder="Asal Sekolah"></td>
					</tr>
					<tr>
						<td><h4><center>Data Pribadi</center></h4></td>
					</tr>
					<tr>
						<td><h5>Nama Murid</h5></td>
						<td><h5>Nama Ibu</h5></td>
					</tr>
					<tr>
						<td><input type="text" name="nama" placeholder="Nama Murid"></td>
						<td><input type="text" name="ibu" placeholder="Nama Ibu"></td>
					</tr>
					<tr>
						<td><h5>Tempat Lahir</h5></td>
						<td><h5>Pendidikan Ibu</h5></td>					
					</tr>
					<tr>
						<td><input type="text" name="tlahir" placeholder="Tempat Lahir"></td>
						<td><input type="text" name="penibu" placeholder="Pendidikan Ibu"></td>
					</tr>
					<tr>
						<td><h5>Tanggal Lahir</h5></td>
						<td><h5>Pekerjaan Ibu</h5></td>
					</tr>
					<tr>
						<td><input type="date" name="date" placeholder="Tanggal Lahir"></td>
						<td><input type="text" name="pibu" placeholder="Pekerjaan Ibu"></td>
					</tr>
					<tr>
						<td><h5>Jenis Kelamin</h5></td>
						<td><h5>Alamat Ibu</h5></td>
					</tr>
					<tr>
						<td><select name="jk" class="form-control" style="width: 400px;">
							<option>Jenis Kelamin</option>
							<option>Laki-laki</option>
							<option>Perempuan</option>
						</select></td>
						<td><textarea class="form-control" name="aibu" style="width: 400px; height: 100px;"></textarea></td>
					</tr>
					<tr>
						<td><h5>Alamat Murid</h5></td>
						<td><h5>Nomor HP Ibu</h5></td>
					</tr>
					<tr>
						<td><textarea class="form-control" name="alamat" style="width: 400px; height: 100px;"></textarea></td>
						<td><input type="text" name="nohpi" placeholder="Nomor HP Ibu"></td>
					</tr>
					<tr>
						
					</tr>
					<tr>
						
					</tr>
					<tr>
						<td><h5>Email</h5></td>
					</tr>
					<tr>

						<td><input type="text" name="email" placeholder="Email"></td>
						
					</tr>
					<tr>
						<td><h5>Agama</h5></td>
					</tr>
					<tr>
						<td><select name="agama" class="form-control" style="width: 400px;">
       						<option>Agama</option>
      						<option value="Islam">Islam</option>
     					</select></td>
					</tr>
					<tr>
						<td><h5>Anak ke Berapa</h5></td>
					</tr>
					<tr>
						<td><input type="number" min="1" name="anak" placeholder="Anak ke berapa"></td>
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