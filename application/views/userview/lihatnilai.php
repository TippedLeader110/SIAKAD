<div class="row">
	<div class="container" style="border-width:0px; background-color:#DCDDE1; padding-top: 10px; padding-bottom: 10px;padding-right: 30px;padding-left: 30px">
		<div class="container" style="border-width:1px; background-color:#DCDDE1;padding-bottom: 60px">
			<div style="background-color:#DCDDE1; width:200px; height:30px; margin-left:350px; margin-top:-15px;">
				<h5 align="center"><b>NILAI MURID</b></h5>	
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row"><?php foreach ($nilaidata as $key => $v2) {
					} ?>
						<div class="col-md-6" style="padding-top: 2em;margin-left: 20px;margin-right: -200px">
						<?php foreach ($guru1 as $key => $v1) {
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
									<td><h5><b>Mata Pelajaran</h5></td>
									<td><h5><?php echo $mapel ?></h5></td>
								</tr>
								<tr><form method="post" action="<?php echo base_url() ?>nilai/lihat">
									<td><h5><b>Semester</b></h5></td><input type="text" hidden name="nis" value="<?php echo $v->nis ?>">
									<td><h5><select onchange="this.form.submit()" name="semester">
										<option value="1">Pilih Semester</option>
										<?php if ($d==0): ?>
										<option value="1">1</option>
										<option value="2">2</option>
										<?php endif ?>
										<?php if ($d==1): ?>
										<option value="3">3</option>
										<option value="4">4</option>
										<?php endif ?>
										<?php if ($d==2): ?>
										<option value="5">5</option>
										<option value="6">6</option></select></h5></td>
										<?php endif ?>
									</form>
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
											<td><h5><b>Tugas 1</b></h5></td><td><h5><?php echo $v2->tugas_1 ?></h5></td>
										</tr>
										<tr>
											<td style="padding-top: 10px"><h5><b>Tugas 2</b></h5></td><td><h5><?php echo $v2->tugas_2 ?></h5></td>
										</tr>
										<tr>
											<td style="padding-top: 10px"><h5><b>Tugas 3</b></h5></td><td><h5><?php echo $v2->tugas_3 ?></h5></td>
											</tr>
									</table>
								</div>
								<div class="col-md-6" style="padding-top: 2em; margin-left: 150px;">
									<table width="380">
										<tr>
											<td><h5><b>Nilai UTS</b></h5></td><td><h5><?php echo $v2->uts ?></h5></td>
											</tr>
										<tr>
											<td style="padding-top: 10px"><h5><b>Nilai UAS</b></h5></td><td><h5><?php echo $v2->uas ?></h5></td>
											</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="container" style="border-width: 0px;">
					<center><a class="btn btn-primary" href="<?php echo base_url()?>Daftar/nilai">Kembali</a></center>
				</div>
			</div>
		</div>
	</div>
</div>	