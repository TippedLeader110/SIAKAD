<?php if ($_SESSION['do']==1): ?>
                <script type="text/javascript">
                  Swal(
  'Kesalahan !',
  'Raport anda pada semester ini belum bisa diakses!',
  'warning'
)
                </script>
                <?php $_SESSION['do']=''; ?>
              <?php endif ?>	

<div class="row">
	<div class="col-md-12" style="margin-top: 10px;">
		<h4 style="color: #2F669F;">Hasil Rapot pada Semester berapa yang ingin Anda Lihat?</h4>
	</div>
</div>
<div class="row">
	<form method="post" action="<?php echo base_url() ?>nilai/raport">
		<table style="width: 350px; margin-left: 20px; margin-top: 10px;">
			<tr>
				<td>
					<h4>Kelas:</h4>
				</td>
				<td>
					<select name="semester" class="form-control">
						<option value="1">X Semester Ganjil</option>
						<option value="2">X Semester Genap</option>
						<option value="3">XI Semester Ganjil</option>
						<option value="4">XI Semester Genap</option>
						<option value="5">XII Semester Ganjil</option>
						<option value="6">XII Semester Genap</option>
					</select>
				</td>
				<td>
					&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary">Cari!</button>
				</td>
			</tr>
		</table>
	</form>
</div>
<?php $this->load->view($page2) ?>

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
		