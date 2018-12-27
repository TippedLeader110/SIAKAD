<div class="row">
	<div class="col-md-12" style="margin-top: 10px;">
		<h4 style="color: #2F669F;"><b>Tugas</b></h4>
		<h5 style="color: #2F669F;">Hasil nilai Tugas pada Semester berapa yang ingin Anda Lihat?</h5>
	</div>
</div>
<div class="row">
		<table style="width: 350px; margin-left: 20px; margin-top: 10px;">
			<tr>
				<td>
					<h4>Kelas:</h4>
				</td>
				<td><form method="post" action="<?php echo base_url() ?>nilai/tugas">
					<select  name="semester" class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>
				<td>
					&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary">Cari!</button>
				</td>
				</td></form>
			</tr>
		</table>
</div>
<?php $this->load->view($page2); ?>
<!-- ini untuk IPS
<div class="row" style="margin-left: 10px; margin-top: 10px;">
	<div>
		<table border="2" style="width:800px; text-align: center;">
			<tr>
				<th>No.</th>
				<th>Mata Pelajaran</th>
				<th>KKM</th>
				<th>Nilai</th>
			</tr>
			<tr>
				<td colspan="4" align="left" style="padding-left: 10px;"><b>Kelompok C (Peminatan)</b></td>
			</tr>
			<tr>
				<td>1.</td>
				<td>Geografi</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>2.</td>
				<td>Sejarah</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>3.</td>
				<td>Sosiologi</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>4.</td>
				<td>Ekonomi</td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</div>
</div>
-->
