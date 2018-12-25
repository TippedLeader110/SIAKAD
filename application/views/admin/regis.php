<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>script/css/admin.css">
<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<h3>Daftar Murid</h3>
		<hr>
</div>
	<div class="row" style="background: white;padding-top: 20px;">
		<div class="col-md-12">
			<table class="table table-borderless">
				<td><h4>Data Sekolah</h4></td>
					<?php  if (validation_errors()!="") {
					echo "<div class='alert'></span><strong>ERROR !</strong> ".validation_errors()." </div>";
					} ?>
				<td>&nbsp;&nbsp;&nbsp;</td><td><h4>Data Orangtua</h4></td>
			</table>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="background: white">
			<div class="table-responsive">
				<form method="post" action="<?php echo base_url() ?>admin/simpanm">
				<table class="table table-borderless">
					<tr>
						<td><input type="number" name="nis" placeholder="NIS"></td>
						<td><b>Data Ayah</b></td>
					</tr>
					<tr>
						<td><input type="text" name="username" placeholder="Username"></td>
						<td><input type="text" placeholder="Nama Ayah" name="ayah"></td>
					</tr>
					<tr>
						<td><input type="text" name="pass" placeholder="Password"></td>
						<td><input type="text" placeholder="Pendidikan Ayah" name="penayah"></td>
					</tr>
					<tr>
						<td><select name="jurusan" class="form-control" style="width: 400px;">
							<option>Jurusan</option>
							<option value="IPA">IPA</option>
							<option value="IPS">IPS</option>
						</select></td>
						<td><input type="text" name="payah" placeholder="Pekerjaan Ayah"></td>
					</tr>
					<tr>
						<td><input type="text" name="tahun" placeholder="Tahun Angkatan"></td>
						<td><input type="text" name="aayah" placeholder="Alamat Ayah"></td>
					</tr>
					<tr>
						<td><input type="text" name="sekolah" placeholder="Asal Sekolah"></td>
						<td><input type="text" name="nohpa" placeholder="Nomor HP Ayah"></td>
					</tr>
					<tr>
						<td><h4>Data Pribadi</h4></td>
						<td><b>Data Ibu</b></td>
					</tr>
					<tr>
						<td><input type="text" name="nama" placeholder="Nama Murid"></td>
						<td><input type="text" name="ibu" placeholder="Nama Ibu"></td>
					</tr>
					<tr>
						<td><input type="text" name="tlahir" placeholder="Tempat Lahir Anda"></td>
						<td><input type="text" name="penibu" placeholder="Pendidikan Ibu"></td>
					</tr>
					<tr>
						<td><input type="date" name="date" placeholder="Tanggal Lahir"></td>
						<td><input type="text" name="pibu" placeholder="Pekerjaan Ibu"></td>
					</tr>
					<tr>
						<td><select name="jk" class="form-control" style="width: 400px;">
							<option>Jenis Kelamin</option>
							<option>Laki-laki</option>
							<option>Perempuan</option>
						</select></td>
						<td><input type="text" name="aibu" placeholder="Alamat Ibu"></td>
					</tr>
					<tr>
						<td><input type="text" name="alamat" placeholder="Alamat Murid"></td>
						<td><input type="text" name="nohpi" placeholder="Nomor HP Ibu"></td>
					</tr>
					<tr>
						<td><input type="text" name="email" placeholder="Email"></td>
					</tr>
					<tr>
						<td><select name="agama" class="form-control" style="width: 400px;">
       						<option>Agama</option>
      						<option value="Islam">Islam</option>
     					</select></td>
					</tr>
					<tr>
						<td><input type="number" name="anak" placeholder="Anak ke berapa"></td>
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