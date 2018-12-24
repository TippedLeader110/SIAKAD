<div class="row">
	<div class="container" style="border-width:0px; background-color:#DCDDE1; padding-top: 10px; padding-bottom: 10px;padding-right: 30px;padding-left: 30px">
		<div class="container" style="border-width:1px; background-color:#DCDDE1;padding-bottom: 100px">
			<div style="background-color:#DCDDE1; width:200px; height:30px; margin-left:350px; margin-top:-15px;">
				<h5 align="center"><b>INPUT NILAI</b></h5>	
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6" style="padding-top: 2em;margin-left: 20px;margin-right: -200px">
						<form>
							<table  width="380">
								<tr>
									<td><h5>Nama Murid</h5></td>
									<td><h5>nama_murid</h5></td>
								</tr>
								<tr>
									<td><h5>Nis</h5></td>
									<td><h5>nis</h5></td>
								</tr>
								<tr>
									<td><h5>Jurusan</h5></td>
									<td><h5>jurusan</h5></td>
								</tr>
								<tr>
									<td><h5>Kelas</h5></td>
									<td><h5>kelas</h5></td>
								</tr>
							</table>
						</div>
						<div class="col-md-6" style="padding-top: 2em; margin-left: 150px;">
							<table   width="380">
								<tr>
									<td><h5>Mata Pelajaran</h5></td>
									<td><h5>mata_pelajaran</h5></td>
								</tr>
								<tr>
									<td><h5>Semester</h5></td>
									<td><h5>semester</h5></td>
								</tr>
								<tr>
									<td><h5>Tahun Pelajaran</h5></td>
									<td><h5>tahun_pelajaran</h5></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row" >
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6" style="padding-top: 2em;margin-left: 20px;margin-right: -200px; ">
									<table width="380">
										<tr>
											<td><h5>Tugas 1</h5></td>
											<td><input type="number" name="tugas1" maxlength="3" size="3" placeholder="Masukkan Nilai"></td>
										</tr>
										<tr>
											<td style="padding-top: 10px"><h5>Tugas 2</h5></td>
											<td style="padding-top: 10px"><input type="number" name="tugas2" maxlength="3" size="3"></td>
										</tr>
										<tr>
											<td style="padding-top: 10px"><h5>Tugas 3</h5></td>
											<td style="padding-top: 10px"><input type="number"name="tugas3" maxlength="3" size="3"></td>
										</tr>
									</table>
								</div>
								<div class="col-md-6" style="padding-top: 2em; margin-left: 150px;">
									<table width="380">
										<tr>
											<td><h5>Nilai UTS</h5></td>
											<td><input type="number" name="uts" maxlength="3" size="3" placeholder="Masukkan Nilai"></td>
										</tr>
										<tr>
											<td style="padding-top: 10px"><h5>Nilai UAS</h5></td>
											<td style="padding-top: 10px"><input type="number" name="uas" maxlength="3" size="3"></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container" style="border-width: 0px;margin-left:350px;padding-top: 20px">
					<table>
						<tr>
							<td><form action="<?php echo base_url()?>nilai/guru"><button type="submit" class="btn btn-primary">Kembali</button></form></td>
							<td><button type="submit" class="btn btn-success">Kirim</button></td>
						</tr>
					</table>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>