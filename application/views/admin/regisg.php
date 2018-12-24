<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>script/css/admin.css">
<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<h3>Daftar Guru</h3>
		<hr>
</div>
	<div class="row" style="background: white;padding-top: 20px;">
		<div class="col-md-12">
			<table class="table table-borderless">
				<td><h4>Informasi Dasar Guru</h4></td>
				<td><h4>Informasi Data Pribadi</h4></td>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="background: white">
			<div class="table-responsive">
				<form method="post" action="<?php echo base_url() ?>admin/simpang">
				<table class="table table-borderless">
					<tr>	
						<td><h4>NIP</h4></td>
						<td><h4>Nama</h4></td>
					</tr>
					<tr>
						<td><input type="text" name="nip" placeholder="NIP"></td>
						<td><input type="text" name="nama" placeholder="Nama"></td>
					</tr>
					<tr>
						<td><h4>Username</h4></td>
						<td><h4>Tempat Lahir</h4></td>
					</tr>
					<tr>
						<td><input type="text" name="username" placeholder="Username"></td>
						<td><input type="text" name="temptlhr" placeholder="Tempat Lahir"></td>
					</tr>
					<tr>	
						<td><h4>Password</h4></td>
						<td><h4>Tanggal Lahir</h4></td>
					</tr>
					<tr>	
						<td><input type="password" name="password" placeholder="Password"></td>
						<td><input type="date" name="date" placeholder="Tanggal Lahir"></td>
					</tr>
					<tr>	
						<td><h4>Email</h4></td>
						<td><h4>Jenis Kelamin</h4></td>
					</tr>
					<tr>	
						<td><input type="email" name="email" placeholder="Email"></td>
						<td><select name="jk" class="form-control" style="width: 400px;">
							<option>Jenis Kelamin</option>
							<option value="Laki-laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select></td>
					</tr>
					<tr>	
						<td><h4>Mengajar di Kelas</h4></td>
						<td><h4>Nomor HP</h4></td>
					</tr>
					<tr>	
						<td><select name="kelas" class="form-control" style="width: 400px;">
							<option>Kelas</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
						</select></td>
						<td><input type="number" name="no_hp" placeholder="Nomor HP"></td>
					</tr>
					<tr>	
						<td><h4>Mata Pelajaran</h4></td>
						<td colspan="15"><h4>Alamat</h4></td>
					</tr>
					<tr><td><select name="mapel" class="form-control" style="width: 400px;">
							<option>Mata Pelajaran</option>
							<option value="akidah akhlak">Akidah Akhlak</option>
							<option value="al quran hadist">Al-Qur'an Hadist</option>
							<option value="bahasa arab">Bahasa Arab</option>
							<option value="bahasa indonesia">Bahasa Indonesia</option>
							<option value="bahasa inggris">Bahasa Inggris</option>
							<option value="bahasa jerman peminatan">Bahasa Jerman Peminatan</option>
							<option value="biologi peminatan">Biologi Peminatan</option>
							<option value="ekonomi peminatan">Ekonomi Peminatan</option>
							<option value="fikih">Fikih</option>
							<option value="fisika peminatan">Fisika Peminatan</option>
							<option value="geografi">Geografi</option>
							<option value="kimia peminatan">Kimia Peminatan</option>
							<option value="matematika">Matematika</option>
							<option value="pendidikan jasmani">Pendidikan Jasmani</option>
							<option value="pendidikan kewarganegaraan">Pendidikan Kewarganegaraan</option>
							<option value="prakarya kewirausahaan">Prakarya Kewirausahaan</option>
							<option value="sejarah">Sejarah</option>
							<option value="sejarah indonesia">Sejarah Indonesia</option>
							<option value="sejarah kebudayaan islam">Sejarah Kebudayaan Islam</option>
							<option value="seni budaya">Seni Budaya</option>
							<option value="sosiologi">Sosiologi</option>
						</select></td>
						<td rowspan="15"><textarea class="form-control" name="alamat" style="width: 400px; height: 100px;"></textarea></td>
					</tr>
					<tr>
						<td><h4>Golongan PNS</h4></td>
					</tr>	
					<tr>
						<td><select name="pg" class="form-control" style="width: 400px;">
							<option>Golongan PNS</option>
							<option value="I/A">I/A</option>
							<option value="I/B">I/B</option>
							<option value="I/C">I/C</option>
							<option value="I/D">I/D</option>
							<option value="II/A">II/A</option>
							<option value="II/B">II/B</option>
							<option value="II/C">II/C</option>
							<option value="II/D">II/D</option>
							<option value="III/A">III/A</option>
							<option value="III/B">III/B</option>
							<option value="III/C">III/C</option>
							<option value="III/D">III/D</option>
							<option value="IV/A">IV/A</option>
							<option value="IV/B">IV/B</option>
							<option value="IV/C">IV/C</option>
							<option value="IV/D">IV/D</option>
							<option value="IV/E">IV/E</option>
						</select></td>
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