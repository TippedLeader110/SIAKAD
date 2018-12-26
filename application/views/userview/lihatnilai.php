<div class="row">
	<div class="container" style="border-width:0px; background-color:#DCDDE1; padding-top: 10px; padding-bottom: 10px;padding-right: 30px;padding-left: 30px">
		<div class="container" style="border-width:1px; background-color:#DCDDE1;padding-bottom: 50px">
			<div style="background-color:#DCDDE1; width:200px; height:30px; margin-left:350px; margin-top:-15px;">
				<h5 align="center"><b>NILAI MURID</b></h5>	
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6" style="padding-top: 2em;margin-left: 20px;margin-right: -200px">
						<form method="post" action="<?php echo base_url() ?>nilai/gurusimpan"><?php foreach ($guru1 as $key => $v1) {
						} ?>
							<table  width="415">
								<tr><?php foreach ($murid as $key => $v) {
								} ?>
									<td style="width: 150px;"><h5>Nama Murid</h5></td>
									<td style="padding-left: 100px;"><h5><?php echo $v->nama ?></h5></td>
								</tr>
								<tr><input type="text" name="nis" value="<?php echo $v->nis ?>" hidden>
									<td><h5>NIS</h5></td>
									<td><h5><?php echo $v->nis ?></h5></td>
								</tr><?php $d = date('Y')-$v->tahun;  ?>
								<tr><input type="text" value="<?php echo $v->jurusan ?>" hidden name="jurusan">
									<td><h5>Jurusan</h5></td>
									<td><h5><?php echo $v->jurusan ?></h5></td>
								</tr>
							</table>
						</div>
						<table><tr><td>&nbsp;&nbsp;&nbsp;</td></tr></table>
						<div class="col-md-6" style="padding-top: 2em; margin-left: 150px;">
							<table width="415">
								<tr>
									<td style="width: 150px;"><h5>Kelas</h5></td>
									<td style="padding-left: 100px;"><h5><?php echo $v->kelas ?></h5></td>
								</tr>
								<tr><input type="text" value="<?php echo $v1->mapel ?>" name="mapel" hidden>
									<td><h5>Mata Pelajaran</h5></td>
									<td><h5><?php echo $v1->mapel ?></h5></td>
								</tr>
								<tr>
									<td><h5>Semester</h5></td>
									<td><h5><select name="semester" style="width: 200px;">
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
					<br>
					<div class="row" >
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6" style="padding-top: 2em;margin-left: 20px;margin-right: -200px; ">
									<table width="415">
										<tr><input type="text" value="<?php echo $v1->tugas1 ?>" name="tugas1" hidden>
											<td style="width: 150px;"><h5>Tugas 1</h5></td>
											<td style="padding-left: 100px;"><?php echo $v1->tugas1 ?></td>
										</tr>
										<tr><input type="text" value="<?php echo $v1->tugas2 ?>" name="tugas2" hidden>
											<td style="padding-top: 10px"><h5>Tugas 2</h5></td>
											<td style="padding-top: 10px"><?php echo $v1->tugas2 ?></td>
										</tr>
										<tr><input type="text" value="<?php echo $v1->tugas3 ?>" name="tugas3" hidden>
											<td style="padding-top: 10px"><h5>Tugas 3</h5></td>
											<td style="padding-top: 10px"><?php echo $v1->tugas3 ?></td>
										</tr>
									</table>
								</div>
								<table><tr><td>&nbsp;&nbsp;&nbsp;</td></tr></table>
								<div class="col-md-6" style="padding-top: 2em; margin-left: 150px;">
									<table width="415">
										<tr><input type="text" value="<?php echo $v1->uts ?>" name="tugas3" hidden>
											<td style="width: 150px;"><h5>Nilai UTS</h5></td>
											<td style="padding-left: 100px;"><?php echo $v1->uts ?></td>
										</tr>
										<tr><input type="text" value="<?php echo $v1->uas ?>" name="tugas3" hidden>
											<td style="padding-top: 10px"><h5>Nilai UAS</h5></td>
											<td style="padding-top: 10px"><?php echo $v1->uas ?></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="container" style="border-width: 0px;">
					<center><form action="<?php echo base_url()?>Daftar/nilai"><button type="submit" class="btn btn-primary">Kembali</button></form></center>
				</div>
			</div>
		</div>
	</div>
</div>