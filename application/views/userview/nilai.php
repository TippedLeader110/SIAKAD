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
						<form method="post" action="<?php echo base_url() ?>nilai/gurusimpan"><?php foreach ($guru1 as $key => $v1) {
						} ?>
							<table  width="380">
								<tr><?php foreach ($murid as $key => $v) {
								} ?>
									<td><h5><b>Nama Murid</b></h5></td>
									<td><h5><?php echo $v->nama ?></h5></td>
								</tr>
								<tr><input type="text" name="nis" value="<?php echo $v->nis ?>" hidden>
									<td><h5><b>NIS</b></h5></td>
									<td><h5><?php echo $v->nis ?></h5></td>
								</tr><?php $d = date('Y')-$v->tahun;  ?>
								<tr><input type="text" value="<?php echo $v->jurusan ?>" hidden name="jurusan">
									<td><h5><b>Jurusan</b></h5></td>
									<td><h5><?php echo $v->jurusan ?></h5></td>
								</tr>
								<tr>
									<td><h5><b>Kelas</b></h5></td>
									<td><h5><?php echo $v->kelas ?></h5></td>
								</tr>
							</table>
						</div>
						<div class="col-md-6" style="padding-top: 2em; margin-left: 150px;">
							<table   width="380">
								<tr><input type="text" value="<?php echo $v1->mapel ?>" name="mapel" hidden>
									<td><h5><b>Mata Pelajaran</b></h5></td>
									<td><h5><?php echo $v1->mapel ?></h5></td>
								</tr>
								<tr>
									<td><h5><b>Semester</b></h5></td>
									<td><h5><select name="semester">
										<?php if ($d==0): ?>
										<option value="1">Semester Ganjil</option>
										<option value="2">Semester Genap</option>
										<?php endif ?>
										<?php if ($d==1): ?>
										<option value="3">Semester Ganjil</option>
										<option value="4">Semester Genap</option>
										<?php endif ?>
										<?php if ($d==2): ?>
										<option value="5">Semester Ganjil</option>
										<option value="6">Semester Genap</option></select></h5></td>
										<?php endif ?>
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
											<td><h5><b>Tugas 1</b></h5></td>
											<td><input type="number" name="tugas1" maxlength="3" size="3" placeholder="Masukkan Nilai"></td>
										</tr>
										<tr>
											<td style="padding-top: 10px"><h5><b>Tugas 2</b></h5></td>
											<td style="padding-top: 10px"><input type="number" name="tugas2" maxlength="3" size="3" placeholder="Masukkan Nilai"></td>
										</tr>
										<tr>
											<td style="padding-top: 10px"><h5><b>Tugas 3</b></h5></td>
											<td style="padding-top: 10px"><input type="number"name="tugas3" maxlength="3" size="3" placeholder="Masukkan Nilai"></td>
										</tr>
									</table>
								</div>
								<div class="col-md-6" style="padding-top: 2em; margin-left: 150px;">
									<table width="380">
										<tr>
											<td><h5><b>Nilai UTS</b></h5></td>
											<td><input type="number" name="uts" maxlength="3" size="3" placeholder="Masukkan Nilai" placeholder="Masukkan Nilai"></td>
										</tr>
										<tr>
											<td style="padding-top: 10px"><h5><b>Nilai UAS</b></h5></td>
											<td style="padding-top: 10px"><input type="number" name="uas" maxlength="3" size="3" placeholder="Masukkan Nilai"></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="container" style="border-width:0px; color:white; font-weight:500; margin-left: 365px; margin-top: 30px;">
							<center><button type="submit" class="btn primary">Simpan</button></center>
					</div>
				</div>
				<div class="col-md-2">
					<div class="container" style="border-width:0px; font-weight:500; color:white; margin-left: 290px; margin-top: 30px;">
						<center><b><a href="<?php echo base_url() ?>nilai/input" class="btn btn-danger">Batal</a></b></center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>