<div class="row">
	<div class="col-md-12" style="margin-top: 10px;">
		<h4 style="color: #2F669F;">Hasil Rapot pada Semester berapa yang ingin Anda Lihat?</h4>
	</div>
</div>
<div class="row">
	<form>
		<table style="width: 350px; margin-left: 20px; margin-top: 10px;">
			<tr>
				<td>
					<h4>Kelas:</h4>
				</td>
				<td>
					<select class="form-control">
						<option>X Semester Ganjil</option>
						<option>X Semester Genap</option>
						<option>XI Semester Ganjil</option>
						<option>XI Semester Genap</option>
						<option>XII Semester Ganjil</option>
						<option>XII Semester Genap</option>
					</select>
				</td>
				<td>
					&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary">Cari!</button>
				</td>
			</tr>
		</table>
	</form>
</div>
<div class="container" style="border-width: 0px;">
	<div class="row">
		<div class="container" style="border-width: 2px; border-color:#d6d6c2; margin-left: 20px; margin-right: 20px; ">
			<div class="row">
				<div style="margin-left: 10px; padding: 10px 10px 10px 10px;">
					<?php 
					$this->db->where('nis', $_SESSION['nis']); $d = $this->db->get('siswa')->result();
					foreach ($d as $key => $v) {} ?>
					<table style="width: 300px;">
						<tr>
							<td><b>Nama Sekolah</b></td>
							<td>:</td>
							<td>MAN 02 Medan</td>
						</tr>
						<tr>
							<td><b>Nama Murid</b></td>
							<td>:</td>
							<td><?php echo $v->nama ?></td>
						</tr>
						<tr>
							<td><b>NIS</b></td>
							<td>:</td>
							<td><?php echo $_SESSION['nis']; ?></td>
						</tr>
					</table>
				</div>
				<div style="margin-left: 150px;  padding: 10px 10px 10px 10px;">
					<table style="width: 300px;">
						<tr>
							<td><b>Kelas</b></td>
							<td>:</td>
							<td><?php echo $v->kelas ?></td>
						</tr>
						<tr>
							<td><b>Jurusan</b></td>
							<td>:</td>
							<td><?php echo $v->jurusan ?></td>
						</tr>
						<tr>
							<td><b>Semester</b></td>
							<td>:</td>
							<td><?php echo $v->semester ?></td>
						</tr>
						<tr>
							<td><b>Tahun Pelajaran</b></td>
							<td>:</td>
							<td><?php echo date('Y'); echo date('Y')+1; ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- batas box -->
	<!-- INI ADALAH HASIL PAGE SETELAH TOMBOL CARI DIKLIK-->
	<!-- Ini adalah hasil raport Jurusan IPA -->
	<div style="margin-top: 20px;">
		<h5 style="color: #2F669F;"><b>PENGETAHUAN DAN KETERAMPILAN</b></h5>

		<table border="2" style="width:700px; text-align: center;">
			<tr>
				<th rowspan="2">No.</td>
				<td rowspan="2"><b>Mata Pelajaran</b></td>
				<td rowspan="2"><b>KKM</b></td>
				<td colspan="2"><b>Pengetahuan</b></td>
				<td colspan="2"><b>Keterampilan</b></td>
				
				
			</tr>
			<tr>
				<td><b>Nilai</b></td>
				<td><b>Predikat</b></td>
				<td><b>Nilai</b></td>
				<td><b>Predikat</b></td>
			</tr>
			<tr>
				<td colspan="7" align="left" style="padding-left: 10px;"><b>Kelompok A (Umum)</b></td>
			</tr>
			<tr>
				<td rowspan="4">1.</td>
				<td align="left">a. Al-Qur'an Hadits</td>
				<td>80</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="left">b. Akidah Akhlak</td>
				<td>80</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="left">c. Fiqih</td>
				<td>80</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td  align="left">d. Sejarah Kebudayaan Islam</td>
				<td>80</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>2.</td>
				<td align="left">Pendidikan Pancasila dan Kewarganegaraan</td>
				<td>75</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>3.</td>
				<td align="left">Bahasa Indonesia</td>
				<td>80</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>4.</td>
				<td align="left">Bahasa Arab</td>
				<td>80</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>5.</td>
				<td align="left">Matematika</td>
				<td>75</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>6.</td>
				<td align="left">Sejarah Indonesia</td>
				<td>75</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>7.</td>
				<td align="left">Bahasa Inggris</td>
				<td>80</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="7" align="left" style="padding-left: 10px;"><b>Kelompok B (Wajib)</b></td>
			</tr>
			<tr>
				<td>1.</td>
				<td align="left">Seni Budaya</td>
				<td>75</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>2.</td>
				<td align="left">Pendidikan Jasmani, Olahraga, dan Kesehatan</td>
				<td>75</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>3.</td>
				<td align="left">Prakarya dan Kewirausahaan</td>
				<td>75</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="7" align="left" style="padding-left: 10px;"><b>Kelompok C (Peminatan)</b></td>
			</tr>
			<tr>
				<td>1.</td>
				<td align="left">Geografi</td>
				<td>75</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>2.</td>
				<td align="left">Sejarah</td>
				<td>75</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>3.</td>
				<td align="left">Sosiologi</td>
				<td>75</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>4.</td>
				<td align="left">Ekonomi</td>
				<td>80</td>
				<td><?php $w = $v->tugas1+$v->tugas2+$v->tugas3+$v->uas+$v->uts; $w = $w/5; ?></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		<!-- 
		 // INI ADALAH TABEL RAPORT JURUSAN IPS
			<div style="margin-top: 20px;">
		<h5 style="color: #2F669F;"><b>Pengetahuan dan Keterampilan</b></h5>

		<table border="2" style="width:700px; text-align: center;">
			<tr>
				<th rowspan="2">No.</td>
				<td rowspan="2">Mata Pelajaran</td>
				<td rowspan="2">KKM</td>
				<td colspan="2">Pengetahuan</td>
				<td colspan="2">Keterampilan</td>
				
				
			</tr>
			<tr>
				<td>Nilai</td>
				<td>Predikat</td>
				<td>Nilai</td>
				<td>Predikat</td>
			</tr>
			<tr>
				<td colspan="7" align="left" style="padding-left: 10px;"><b>Kelompok A (Umum)</b></td>
			</tr>
			<tr>
				<td rowspan="4">1.</td>
				<td align="left">a. Al-Qur'an Hadits</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="left">b. Akidah Akhlak</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="left">c. Fiqih</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td  align="left">d. Sejarah Kebudayaan Islam</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>2.</td>
				<td align="left">Pendidikan Pancasila dan Kewarganegaraan</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>3.</td>
				<td align="left">Bahasa Indonesia</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>4.</td>
				<td align="left">Bahasa Arab</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>5.</td>
				<td align="left">Matematika</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>6.</td>
				<td align="left">Sejarah Indonesia</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>7.</td>
				<td align="left">Bahasa Inggris</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="7" align="left" style="padding-left: 10px;"><b>Kelompok B (Wajib)</b></td>
			</tr>
			<tr>
				<td>1.</td>
				<td align="left">Seni Budaya</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>2.</td>
				<td align="left">Pendidikan Jasmani, Olahraga, dan Kesehatan</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>3.</td>
				<td align="left">Prakarya dan Kewirausahaan</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="7" align="left" style="padding-left: 10px;"><b>Kelompok C (Peminatan)</b></td>
			</tr>
			<tr>
				<td>1.</td>
				<td align="left">Geografi</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>2.</td>
				<td align="left">Sejarah</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>3.</td>
				<td align="left">Sosiologi</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>4.</td>
				<td align="left">Ekonomi</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="7" align="left" style="padding-left: 10px;"><b>Kelompok D (Ekstrakulikuler)</b></td>
			</tr>
			<tr>
				<td>1</td>
				<td align="left">Pramuka</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td rowspan="3">2</td>
				<td align="left">Lainnya</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td style="padding-left: 10px; text-align: left;">a. </td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td  style="padding-left: 10px; text-align: left;">b. </td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>

		-->	
		<h5 style="color: #2F669F; margin-top: 20px;"><b>EKSTRAKULIKULER</b></h5>

		<table border="2" style="width:700px; text-align: center; margin-bottom: 20px;">
			<tr>
				<td colspan="2"><b>Ekstrakulikuler</b></td>
				<td width="300"><b>Nilai</b></td>
			</tr>
			<tr>
				<td>1.</td>
				<td align="left">Pramuka</td>
				<td></td>
			</tr>
			<tr>
				<td rowspan="3">2.</td>
				<td align="left">Lainnya</td>
				<td></td>
			</tr>
			<tr>
				<td align="left">a. </td>
				<td></td>
			</tr>
			<tr>
				<td align="left">b. </td>
				<td></td>
			</tr>
		</table>
		
		<h5 style="color: #2F669F; margin-top: 20px;"><b>KEHADIRAN</b></h5>
		<table border="2" style="width:700px; text-align: center; margin-bottom: 20px;">
			<tr>
				<td colspan="2"><b>Hadir</b></td>
				<td width="300"><b>Hari</b></td>
			</tr>
			<tr>
				<td>1.</td>
				<td align="left">Jumlah Kehadiran</td>
				<td></td>
			</tr>
			<tr>
				<td>2.</td>
				<td align="left">Izin</td>
				<td></td>
			</tr>
			<tr>
				<td>3.</td>
				<td align="left">Sakit</td>
				<td></td>
			</tr>
			<tr>
				<td>4.</td>
				<td align="left">Tanpa Keterangan</td>
				<td></td>
			</tr>
		</table>

		<h5 style="color: #2F669F; margin-top: 20px;"><b>INTERVAL PREDIKAT ERDASARKAN KKM</b></h5>
		<table border="2" style="width:700px; text-align: center; margin-bottom: 20px;">
			<tr>
				<td rowspan="2"><b>KKM</b></td>
				<td colspan="4"><b>Predikat</b></td>
			</tr>
			<tr>
				<td>D = Kurang</td>
				<td>C = Cukup</td>
				<td>B = Baik</td>
				<td>A = Sangat Baik</td>
			</tr>
			<tr>
				<td>80</td>
				<td><=80</td>
				<td><=84</td>
				<td><=91</td>
				<td>>91</td>
			</tr>
			<tr>
				<td>82</td>
				<td><=82</td>
				<td><=85</td>
				<td><=91</td>
				<td>>91</td>
			</tr>
			<tr>
				<td>83</td>
				<td><=83</td>
				<td><=86</td>
				<td><=91</td>
				<td>>91</td>
			</tr>
		</table>
	</div>
</div>