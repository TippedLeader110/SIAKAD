
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

<div class="row" style="margin-top: 30px;">
	<div style="margin-left: 18px; padding-top: 10px;">
		<h5 style="color: #2F669F;">Berikut adalah hasil nilai Ujian Semester Anda:</h5>
	</div>
	<div style="margin-left: 20px;">
		<div class="row">
		<div class="container" style="border-width: 2px; border-color:#d6d6c2; margin-left: 20px; margin-right: 20px; ">
			<div class="row">
				<div style="margin-left: 10px; padding: 10px 10px 10px 10px;">
					<table style="width: 300px;">
						<tr>
							<td><b>Nama Sekolah</b></td>
							<td>:</td>
							<td> NAMA SEKOLAH</td>
						</tr>
						<tr>
							<td><b>Nama Siswa</b></td>
							<td>:</td>
							<td> <?php echo $_SESSION['user']; ?></td>
						</tr>
						<tr>
							<td><b>NIS</b></td>
							<td>:</td>
							<td> <?php echo $_SESSION['nis']; ?></td>
						</tr>
					</table>
				</div>
				<?php 
				$this->db->where('nis', $_SESSION['nis']);
				$lol = $this->db->get('siswa')->result(); 
				foreach ($lol as $key => $value) {
					# code...
				}?>
				<div style="margin-left: 150px;  padding: 10px 10px 10px 10px;">
					<table style="width: 300px;">
						<tr>
							<td><b>Kelas</b></td>
							<td>:</td>
							<td><?php echo $value->kelas ?></td>
						</tr>
						<tr>
							<td><b>Jurusan</b></td>
							<td>:</td>
							<td> <?php echo $value->jurusan ?></td>
						</tr>
						<!-- <tr>
							<td><b>Semester</b></td>
							<td>:</td>
							<td></td>
						</tr> -->
						<tr>
							<td><b>Tahun Pelajaran</b></td>
							<td>:</td>
							<td> <?php echo  date("Y"); echo"/"; echo date('Y')+1; ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<div class="row" style="margin-left: 10px; margin-top: 20px;">
	<div>
		<table border="2" style="width:800px; text-align: center;">
			<tr>
				<th >No.</th>
				<th style="width: 660px;">Mata Pelajaran</th>
				<th>Nilai</th>
			</tr>
			<tr>
				<td colspan="4" align="left" style="padding-left: 10px;"><b>Kelompok A (Umum)</b></td>
			</tr>
			<tr>
				<td>1.</td>
				<td>Al-Quran Hadits</td>
				<td><?php echo "$vquran_hadis->uas"; ?></td>
			</tr>
			<tr>
				<td>2.</td>
				<td>Akidah Akhlak</td>				
				<td><?php echo $vakidah_akhlak->uas ?></td>
			</tr>
			<tr>
				<td>3.</td>
				<td>Fiqih</td>
				<td><?php echo $vfikih->uas ?></td>
			</tr>
			<tr>
				<td>4.</td>
				<td>Sejarah Kebudayaan Islam</td>				
				<td><?php echo $vski->uas ?></td>
			</tr>
			<tr>
				<td>5.</td>
				<td>Pendidikan Pancasila dan Kewarganegaraan</td>		
				<td><?php echo $vpkn->uas; ?></td>
			</tr>
			<tr>
				<td>6.</td>
				<td>Bahasa Indonesia</td>				
				<td><?php echo $vb_indo->uas ?></td>
			</tr>
			<tr>
				<td>7.</td>
				<td>Bahasa Arab</td>				
				<td><?php echo $vb_arab->uas ?></td>
			</tr>
			<tr>
				<td>8.</td>
				<td>Matematika</td>				
				<td><?php echo "$vmatematika->uas"; ?></td>
			</tr>
			<tr>
				<td>9.</td>
				<td>Sejarah Indonesia</td>				
				<td><?php echo $vsejarah_indo->uas ?></td>
			</tr>
			<tr>
				<td>10.</td>
				<td>Bahasa Inggris</td>				
				<td><?php echo $vb_ing->uas ?></td>
			</tr>
		</table>
	</div>
</div>

<!--- ini pelajaran wajib-->
<div class="row" style="margin-left: 10px; margin-top: 10px;">
	<div>
		<table border="2" style="width:800px; text-align: center;">
			<tr>
				<th>No.</th>
				<th>Mata Pelajaran</th>
				<th>Nilai</th>
			</tr>
			<tr>
				<td colspan="4" align="left" style="padding-left: 10px;"><b>Kelompok B (Wajib)</b></td>
			</tr>
			<tr>
				<td>1.</td>
				<td>Seni Budaya</td>		
				<td><?php echo $vseni_budaya->uas ?></td>
			</tr>
			<tr>
				<td>2.</td>
				<td>Pendidikan Jasmani, Olahraga, dan Kesehatan</td>				
				<td><?php echo $vpenjas->uas ?></td>
			</tr>
			<tr>
				<td>3.</td>
				<td>Prakarya dan Kewirausahaan</td>				
				<td><?php echo $vprakarya_kewirausahaan->uas ?></td>
			</tr>
		</table>
	</div>
</div>
<!--- ini ada sesuai jurusan si siswa (IPA)1-->
<div class="row" style="margin-left: 10px; margin-top: 10px;">
	<div>
		<table border="2" style="width:800px; text-align: center;">
			<tr>
				<th>No.</th>
				<th>Mata Pelajaran</th>
				<th>Nilai</th>
			</tr>
			<tr>
				<td colspan="4" align="left" style="padding-left: 10px;"><b>Kelompok C (Peminatan)</b></td>
			</tr>
			<tr>
				<td>1.</td>
				<td>Geografi</td>
				<td><?php echo $vgeografi->uas ?></td>
			</tr>
			<tr>
				<td>2.</td>
				<td>Sejarah</td>
				<td><?php echo $vsejarah->uas ?></td>
			</tr>
			<tr>
				<td>3.</td>
				<td>Sosiologi</td>
				<td><?php echo $vsosiologi ?></td>
			</tr>
			<tr>
				<td>4.</td>
				<td>Ekonomi</td>
				<td><?php echo $vekonomi_p ?></td>
			</tr>
		</table>
	</div>
</div>

<div class="row" style="margin-left: 10px; margin-top: 10px; margin-bottom: 20px;">
	<div>
		<table border="2" style="width:800px; text-align: center;">
			<tr>
				<td colspan="3" style="width: 660px; text-align: right; padding-right: 20px;"><b>TOTAL</b></td>
				<td><?php echo $vsosiologi+$vekonomi_p+$vsejarah+$vgeografi+$vb_arab->uas+$vmatematika->uas+$vsejarah_indo->uas+$vb_ing->uas+$vseni_budaya->uas+$vpenjas->uas+$vprakarya_kewirausahaan->uas+$vpkn->uas+$vb_indo->uas+$vquran_hadis->uas+$vakidah_akhlak->uas+$vfikih->uas+$vski->uas ?></td>
			</tr>
		</table>
	</div>
</div>
