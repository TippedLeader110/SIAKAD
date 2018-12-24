<div class="row">
	<div class="container" style="border-width:0px; background-color:#DCDDE1; padding-top: 10px; padding-bottom: 10px;padding-right: 30px;padding-left: 30px">
		<div class="container" style="border-width:1px; background-color:#DCDDE1;padding-bottom: 100px">
			<div style="background-color:#DCDDE1; width:200px; height:30px; margin-left:400px; margin-top:-15px;">
				<h5 align="center"><b>INPUT NILAI</b></h5>	
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6" style="padding-top: 2em;margin-left: 200px;margin-right: -200px">
							<table>
								<tr>
									<td><h4>Nama Murid</h4></td>
									<td></td>
									<td><h4>$nama_murid</h4></td>
								</tr>
								<tr>
									<td><h4>Nis</h4></td>
									<td></td>
									<td><h4>$nis</h4></td>
								</tr>
								<tr>
									<td><h4>Jurusan</h4></td>
									<td></td>
									<td><h4>$jurusan</h4></td>
								</tr>
								<tr>
									<td><h4>Kelas</h4></td>
									<td></td>
									<td><h4>$kelas</h4></td>
								</tr>
							</table>
						</div>
						<div class="col-md-6" style="padding-top: 2em">
							<table>
								<tr>
									<td><h4>Mata Pelajaran</h4></td>
									<td><h4>$mata_pelajaran</h4></td>
								</tr>
								<tr>
									<td><h4>Semester</h4></td>
									<td><h4>$semester</h4></td>
								</tr>
								<tr>
									<td><h4>Tahun Pelajaran</h4></td>
									<td><h4>$tahun_pelajaran</h4></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6" style="padding-top: 2em;margin-left: 200px;margin-right: -200px">
									<table>
										<tr>
											<td><h4>Tugas 1</h4></td>
											<td><input type="number" name="tugas1" maxlength="3" size="3" placeholder="Masukkan Nilai"></td>
										</tr>
										<tr>
											<td style="padding-top: 10px"><h4>Tugas 2</h4></td>
											<td style="padding-top: 10px"><input type="number" name="tugas2" maxlength="3" size="3"></td>
										</tr>
										<tr>
											<td style="padding-top: 10px"><h4>Tugas 3</h4></td>
											<td style="padding-top: 10px"><input type="number"name="tugas3" maxlength="3" size="3"></td>
										</tr>
									</table>
								</div>
								<div class="col-md-6" style="padding-top: 2em">
									<table>
										<tr>
											<td><h4>Nilai UTS</h4></td>
											<td><input type="number" name="uts" maxlength="3" size="3" placeholder="Masukkan Nilai"></td>
										</tr>
										<tr>
											<td style="padding-top: 10px"><h4>Nilai UAS</h4></td>
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
				<div class="container" style="border-width: 0px;margin-left: 450px;padding-top: 10px">
					<table>
						<tr>
							<td><form action="<?php echo base_url()?>nilai/guru"><button type="submit" class="btn btn-primary">Kembali</button></form></td>
							<td><button type="submit" class="btn btn-success">Kirim</button></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>