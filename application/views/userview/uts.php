<div class="row">
	<div class="col-md-12" style="margin-top: 10px;">
		<h4 style="color: #2F669F;"><b>Ujian Tengah Semester</b></h4>
		<h5 style="color: #2F669F;">Hasil nilai Ujian Semester pada Semester berapa yang ingin Anda Lihat?</h5>
	</div>
</div>
<div class="row">
		<table style="width: 350px; margin-left: 20px; margin-top: 10px;">
			<tr>
				<td>
					<h4>Kelas:</h4>
				</td>
				<td><form method="post" action="<?php echo base_url() ?>nilai/uts">
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