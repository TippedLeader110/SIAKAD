<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>script/css/admin.css">
<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<h3>Daftar Murid</h3>
		<hr>
</div>
	<div class="row" style="background: white;padding-top: 20px;">
		<div class="col-md-12">
			<h4>Informasi Dasar Siswa</h4>
		</div>
	</div>
	<?php 
	foreach ($arra as $key => $v) {
		$nis=$v->nis;
		$nama = $v->nama;
		$username = $v->username;
		$password = $v->password;
		$asal_sekolah = $v->asal_sekolah;
		$agama = $v->agama;
		$alamat = $v->alamat;
		$email = $v->email;
		$nama_ayah = $v->nama_ayah;
		$nama_ibu = $v->nama_ibu;
		$pekerjaan_ayah = $v->pekerjaan_ayah;
		$pekerjaan_ibu = $v->pekerjaan_ibu;
		$alamat_ayah = $v->alamat_ayah;
		$alamat_ibu = $v->alamat_ibu;
		$no_hp_ayah = $v->no_hp_ayah;
		$no_hp_ibu = $v->no_hp_ibu;
		$tahun = $v->tahun;
		$tempat = $v->tempat;
		$tanggal_lahir = $v->tanggal_lahir;
		$anak_ke = $v->anak_ke;

	}
	 ?>
	<div class="row">
		<div class="col-md-12" style="background: white">
			<div class="table-responsive">
				<form method="post" action="<?php echo base_url() ?>admin/simpanm">
				<table class="table table-borderless">
					<tr>
						<th>
							<img style="max-width: 222px;" src="<?php echo base_url();echo"gambar/"; echo $v->pict ?>.jpg">
						</th>
					</tr>
					<tr>
						<td><input type="number" name="nis" placeholder="NIS" value="<?php echo $nis ?>"></td><td>&nbsp;</td><td><input type="text" name="nama" placeholder="Nama" value="<?php echo $nama ?>"></td>
					</tr>
					<tr>
						<td><input type="text" value="<?php echo $username ?>" name="username" placeholder="Username"></td><td>&nbsp;</td><td><input type="password" value="<?php echo $password ?>" name="pass" placeholder="Password"></td>
					</tr>
					<tr>
						<td><input type="text" name="sekolah" placeholder="Asal Sekolah" value="<?php echo $asal_sekolah ?>"></td><td>&nbsp;</td><td><input type="text" value="<?php echo $agama ?>" name="agama" placeholder="Agama"></td>
					</tr>
					<tr>
						<td><input type="text" value="<?php echo $alamat ?>" name="alamat" placeholder="Alamat"></td><td>&nbsp;</td><td><input type="email" name="email" value="<?php echo $email ?>" placeholder="Email"></td>
					</tr>
					<tr>
						<td>
							<select name="jkel" class="form-control">
							<option>Jenis Kelamin</option>
							<option value="Laki-laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
						</td>
						<td>&nbsp;</td><td><select name="jurusan" class="form-control">
							<option>Jurusan</option>
							<option value="IPA">IPA</option>
							<option value="IPS">IPS</option>
						</select></td>
					</tr>
					<tr>
						<td><input type="text" name="ayah" placeholder="Nama Ayah" value="<?php echo $nama_ayah ?>"></td><td>&nbsp;</td><td><input type="text" name="ibu" placeholder="Nama Ibu" value="<?php echo $nama_ibu ?>"></td>
					</tr>
					<tr>
						<td><input type="text" name="payah" placeholder="Pekerjaan Ayah" value="<?php echo $pekerjaan_ayah ?>"></td><td>&nbsp;</td><td><input type="text" name="pibu" value="<?php echo $pekerjaan_ibu ?>" placeholder="Pekerjaan Ibu"></td>
					</tr>
					<tr>
						<td><input type="text" name="aayah" placeholder="Alamat Ayah" value="<?php echo $alamat_ayah ?>"></td><td>&nbsp;</td><td><input type="text" name="aibu" placeholder="Alamat Ibu" value="<?php echo $alamat_ibu ?>"></td>
					</tr>
					<tr>
						<td><input type="text" name="nohpa" placeholder="Nomor HP Ayah" <?php echo $no_hp_ayah ?>></td><td>&nbsp;</td><td><input type="text" name="nohpi" placeholder="Nomor HP Ibu" value="<?php echo $no_hp_ibu ?>"></td>
					</tr>
					<tr>
						<td><input type="text" name="tahun" placeholder="Tahun Angkatan" value="<?php echo $tahun ?>"></td><td>&nbsp;</td><td><input type="text" name="tlahir" placeholder="Tempat Lahir" value="<?php echo $tempat ?>"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir:<input type="date" name="date" value="<?php echo $tanggal_lahir ?>" placeholder="Tanggal Lahir"></td><td>&nbsp;</td><td><input value="<?php echo $anak_ke ?>" type="text" name="anak" placeholder="Anak Ke "></td>
					</tr>
					<tr>
						
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