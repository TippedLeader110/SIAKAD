
<?php foreach ($geografi as $key => $vgeografi) {
	# code...
} ?>
<?php foreach ($sejarah as $key => $vsejarah) {
	# code...
} ?>
<?php foreach ($quran_hadis as $key => $vquran_hadis) {
	# code...
} ?>

<?php foreach ($quran_hadis as $key => $vquran_hadis) {
	# code...
} ?>
<?php foreach ($akidah_akhlak as $key => $vakidah_akhlak) {
	# code...
} ?>
<?php foreach ($fikih as $key => $vfikih) {
	# code...
} ?>
<?php foreach ($ski as $key => $vski) {
	# code...
} ?>
<?php foreach ($pkn as $key => $vpkn) {
	# code...
} ?>
<?php foreach ($b_indo as $key => $vb_indo) {
	# code...
} ?>
<?php foreach ($b_arab as $key => $vb_arab) {
	# code...
} ?>
<?php foreach ($matematika as $key => $vmatematika) {
	# code...
} ?>
<?php foreach ($matematika_p as $key => $vmatematika_p) {
	# code...
} ?>
<?php foreach ($sejarah_indo as $key => $vsejarah_indo) {
	# code...
} ?>
<?php foreach ($b_ing as $key => $vb_ing) {
	# code...
} ?>
<?php foreach ($seni_budaya as $key => $vseni_budaya) {
	# code...
} ?>
<?php foreach ($penjas as $key => $vpenjas) {
	# code...
} ?>
<?php foreach ($prakarya_kewirausahaan as $key => $vprakarya_kewirausahaan) {
	# code...
} ?>
<?php foreach ($matematika as $key => $vmatematika) {
	# code...
} ?>
<?php foreach ($biologi_p as $key => $vbiologi_p) {
	# code...
} ?>
<?php foreach ($fisika_p as $key => $vfisika_p) {
	# code...
} ?>
<?php foreach ($kimia_p as $key => $vkimia_p) {
	# code...
} ?>
<?php foreach ($ekonomi_p as $key => $vekonomi_p) {
	# code...
} ?>
<?php foreach ($sosiologi as $key => $vsosiologi) {
	# code...
} ?>
<?php foreach ($b_jerman_p as $key => $vb_jerman_p) {
	# code...
} ?>
<div id="print">
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
							<td><?php echo $vmatematika->semester ?></td>
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
		<h5 style="color: #2F669F;"><b>PENGETAHUAN</b></h5>

		<table border="2" style="width:700px; text-align: center;">
			<tr>
				<th rowspan="2">No.</td>
				<td rowspan="2"><b>Mata Pelajaran</b></td>
				<td rowspan="2"><b>KKM</b></td>
				<td colspan="2"><b>Pengetahuan</b></td>
			</tr>
			<tr>
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
				<td><?php $w = $vquran_hadis->tugas_1	+$vquran_hadis->tugas_2+$vquran_hadis->tugas_3+$vquran_hadis->uas+$vquran_hadis->uts; echo $w = $w/5; ?></td>
				<td><?php if($w>90){echo A;}elseif($w>=84 || $w<=90){echo B;}elseif($w<84 || $w>80){echo C;}elseif($w<80){echo D;} ?></td>
			</tr>
			<tr>
				<td align="left">b. Akidah Akhlak</td>
				<td>80</td>
				<td><?php $w = $vakidah_akhlak->tugas_1	+$vakidah_akhlak->tugas_2+$vakidah_akhlak->tugas_3+$vakidah_akhlak->uas+$vakidah_akhlak->uts; echo $w = $w/5; ?></td>
				<td><?php if($w>90){echo A;}elseif($w>=84 || $w<=90){echo B;}elseif($w<84 || $w>80){echo C;}elseif($w<80){echo D;} ?></td>
			</tr>
			<tr>
				<td align="left">c. Fiqih</td>
				<td>80</td>
				<td><?php $w = $vfikih->tugas_1	+$vfikih->tugas_2+$vfikih->tugas_3+$vfikih->uas+$vfikih->uts; echo $w = $w/5; ?></td>
				<td><?php if($w>90){echo A;}elseif($w>=84 || $w<=90){echo B;}elseif($w<84 || $w>80){echo C;}elseif($w<80){echo D;} ?></td>
			</tr>
			<tr>
				<td  align="left">d. Sejarah Kebudayaan Islam</td>
				<td>80</td>
				<td><?php $w = $vski->tugas_1+$vski->tugas_2+$vski->tugas_3+$vski->uas+$vski->uts; echo $w = $w/5; ?></td>
				<td><?php if($w>90){echo A;}elseif($w>=84 || $w<=90){echo B;}elseif($w<84 || $w>80){echo C;}elseif($w<80){echo D;} ?></td>
			</tr>
			<tr>
				<td>2.</td>
				<td align="left">Pendidikan Pancasila dan Kewarganegaraan</td>
				<td>75</td>
				<td><?php $w = $vpkn->tugas_1+$vpkn->tugas_2+$vpkn->tugas_3+$vpkn->uas+$vpkn->uts; echo $w = $w/5; ?></td>
				<td><?php if($w>90){echo A;}elseif($w>=84 || $w<=90){echo B;}elseif($w<84 || $w>80){echo C;}elseif($w<80){echo D;} ?></td>
			</tr>
			<tr>
				<td>3.</td>
				<td align="left">Bahasa Indonesia</td>
				<td>80</td>
				<td><?php $w = $vb_indo->tugas_1+$vb_indo->tugas_2+$vb_indo->tugas_3+$vb_indo->uas+$vb_indo->uts; echo $w = $w/5; ?></td>
				<td><?php if($w>90){echo A;}elseif($w>=84 || $w<=90){echo B;}elseif($w<84 || $w>80){echo C;}elseif($w<80){echo D;} ?></td>
			</tr>
			<tr>
				<td>4.</td>
				<td align="left">Bahasa Arab</td>
				<td>80</td>
				<td><?php $w = $vb_arab->tugas_1+$vb_arab->tugas_2+$vb_arab->tugas_3+$vb_arab->uas+$vb_arab->uts; echo $w = $w/5; ?></td>
				<td><?php if($w>90){echo A;}elseif($w>=84 || $w<=90){echo B;}elseif($w<84 || $w>80){echo C;}elseif($w<80){echo D;} ?></td>
			</tr>
			<tr>
				<td>5.</td>
				<td align="left">Matematika</td>
				<td>75</td>
				<td><?php $w = $vmatematika->tugas_1+$vmatematika->tugas_2+$vmatematika->tugas_3+$vmatematika->uas+$vmatematika->uts; echo $w = $w/5; ?></td>
				<td><?php if($w>90){echo A;}elseif($w>=84 || $w<=90){echo B;}elseif($w<84 || $w>80){echo C;}elseif($w<80){echo D;} ?></td>
			</tr>
			<tr>
				<td>6.</td>
				<td align="left">Sejarah Indonesia</td>
				<td>75</td>
				<td><?php $w = $vsejarah_indo->tugas_1	+$vsejarah_indo->tugas_2+$vsejarah_indo->tugas_3+$vsejarah_indo->uas+$vsejarah_indo->uts; echo $w = $w/5; ?></td>
				<td><?php if($w>90){echo A;}elseif($w>=84 || $w<=90){echo B;}elseif($w<84 || $w>80){echo C;}elseif($w<80){echo D;} ?></td>
			</tr>
			<tr>
				<td>7.</td>
				<td align="left">Bahasa Inggris</td>
				<td>80</td>
				<td><?php $w = $vb_ing->tugas_1	+$vb_ing->tugas_2+$vb_ing->tugas_3+$vb_ing->uas+$vb_ing->uts; echo $w = $w/5; ?></td>
				<td><?php if($w>90){echo A;}elseif($w>=84 || $w<=90){echo B;}elseif($w<84 || $w>80){echo C;}elseif($w<80){echo D;} ?></td>
			</tr>
			<tr>
				<td colspan="7" align="left" style="padding-left: 10px;"><b>Kelompok B (Wajib)</b></td>
			</tr>
			<tr>
				<td>1.</td>
				<td align="left">Seni Budaya</td>
				<td>75</td>
				<td><?php $w = $vseni_budaya->tugas_1	+$vseni_budaya->tugas_2+$vseni_budaya->tugas_3+$vseni_budaya->uas+$vseni_budaya->uts; echo $w = $w/5; ?></td>
				<td><?php if($w>90){echo A;}elseif($w>=84 || $w<=90){echo B;}elseif($w<84 || $w>80){echo C;}elseif($w<80){echo D;} ?></td>
			</tr>
			<tr>
				<td>2.</td>
				<td align="left">Pendidikan Jasmani, Olahraga, dan Kesehatan</td>
				<td>75</td>
				<td><?php $w = $vpenjas->tugas_1	+$vpenjas->tugas_2+$vpenjas->tugas_3+$vpenjas->uas+$vpenjas->uts; echo $w = $w/5; ?></td>
				<td><?php if($w>90){echo A;}elseif($w>=84 || $w<=90){echo B;}elseif($w<84 || $w>80){echo C;}elseif($w<80){echo D;} ?></td>
			</tr>
			<tr>
				<td>3.</td>
				<td align="left">Prakarya dan Kewirausahaan</td>
				<td>75</td>
				<td><?php $w = $vprakarya_kewirausahaan->tugas_1	+$vprakarya_kewirausahaan->tugas_2+$vprakarya_kewirausahaan->tugas_3+$vprakarya_kewirausahaan->uas+$vprakarya_kewirausahaan->uts; echo $w = $w/5; ?></td>
				<td><?php if($w>90){echo A;}elseif($w>=84 || $w<=90){echo B;}elseif($w<84 || $w>80){echo C;}elseif($w<80){echo D;} ?></td>
			</tr>
			<tr>
				<td colspan="7" align="left" style="padding-left: 10px;"><b>Kelompok C (Peminatan)</b></td>
			</tr>
			<tr>
				<td>1.</td>
				<td align="left">Geografi</td>
				<td>75</td>
				<td><?php $w = $vgeografi->tugas1+$vgeografi->tugas2+$vgeografi->tugas3+$vgeografi->uas+$vgeografi->uts; $w = $w/5; ?></td>
				<td></td>
			</tr>
			<tr>
				<td>2.</td>
				<td align="left">Sejarah</td>
				<td>75</td>
				<td><?php $w = $vsejarah->tugas1+$vsejarah->tugas2+$vsejarah->tugas3+$vsejarah->uas+$vsejarah->uts; $w = $w/5; ?></td>
				<td></td>
			</tr>
			<tr>
				<td>3.</td>
				<td align="left">Sosiologi</td>
				<td>75</td>
				<td><?php $w = $vsosiologi->tugas1+$vsosiologi->tugas2+$vsosiologi->tugas3+$vsosiologi->uas+$vsosiologi->uts; $w = $w/5; ?></td>
				<td></td>
			</tr>
			<tr>
				<td>4.</td>
				<td align="left">Ekonomi</td>
				<td>80</td>
				<td><?php $w = $vekonomi_p->tugas1+$vekonomi_p->tugas2+$vekonomi_p->tugas3+$vekonomi_p->uas+$vekonomi_p->uts; $w = $w/5; ?></td>
				<td></td>
			</tr>
		</table>
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
</div>