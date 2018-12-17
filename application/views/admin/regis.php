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
	<div class="row">
		<div class="col-md-12" style="background: white">
			<div class="table-responsive">
				<form method="post" action="<?php echo base_url() ?>admin/simpanm">
				<table class="table table-borderless">
					<tr>
						<td><input type="number" name="nis" placeholder="NIS"></td><td>&nbsp;</td><td><input type="text" name="nama" placeholder="Nama"></td>
					</tr>
					<tr>
						<td><input type="text" name="username" placeholder="Username"></td><td>&nbsp;</td><td><input type="text" placeholder="Password" name="pass"></td>
					</tr>
					<tr>
						<td><input type="text" name="sekolah" placeholder="Asal Sekolah"></td><td>&nbsp;</td>
						<td><select name="agama" class="form-control">
							<option>Agama</option>
							<option value="Islam">Islam</option>
							<option value="Kristen Katolik">Kristen Katolik</option>
							<option value="Kristen Protestan">Kristen Protestan</option>
							<option value="Hindu">Hindu</option>
							<option value="Buddha">Buddha</option>
							<option value="Lainnya">Lainnya</option>
						</select></td>
					</tr>
					<tr>
						<td><input type="text" name="alamat" placeholder="Alamat"></td><td>&nbsp;</td><td><input type="email" name="email" placeholder="Email"></td>
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
						<td><input type="text" name="ayah" placeholder="Nama Ayah"></td><td>&nbsp;</td><td><input type="text" name="ibu" placeholder="Nama Ibu"></td>
					</tr>
					<tr>
						<td><input type="text" name="payah" placeholder="Pekerjaan Ayah"></td><td>&nbsp;</td><td><input type="text" name="pibu" placeholder="Pekerjaan Ibu"></td>
					</tr>
					<tr>
						<td><input type="text" name="aayah" placeholder="Alamat Ayah"></td><td>&nbsp;</td><td><input type="text" name="aibu" placeholder="Alamat Ibu"></td>
					</tr>
					<tr>
						<td><input type="text" name="nohpa" placeholder="Nomor HP Ayah"></td><td>&nbsp;</td><td><input type="text" name="nohpi" placeholder="Nomor HP Ibu"></td>
					</tr>
					<tr>
						<td><input type="text" name="tahun" placeholder="Tahun Angkatan"></td><td>&nbsp;</td><td><input type="text" name="tlahir" placeholder="Tempat Lahir Anda"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir </td><td>&nbsp;</td><td><input type="number" name="anak" placeholder="Anda Anak Ke "></td>
					</tr>
					<tr>
						<td><input type="date" name="date" placeholder="Tanggal Lahir"></td>
					</tr>
					<tr>
						<td>
							<select name="kelas" class="form-control">
							<option>Kelas</option>
							<option value="a">A</option>
							<option value="b">B</option>
							<option value="C">C</option>
						</select>
						</td>
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