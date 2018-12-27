<div class="container" style="border-width:0px; background-color:#DCDDE1; padding-top: 10px; padding-bottom: 20px;">
<div class="container" style="border-width:1px; background-color:#DCDDE1;">
	<div style="background-color:#DCDDE1; width:200px; height:30px; margin-left:350px; margin-top:-15px;">
		<h5 align="center"><b>INPUT PRESENSI MURID</b></h5>	
	</div>
	<div class="row"><?php foreach ($murid as $key => $v): ?>
		
	<?php endforeach ?>
		<div class="col-md-12"><form method="post" action="<?php echo base_url() ?>Absen/pressave">
			<div class="row" align="center" style="padding-top: 2em">
				<div class="col-md-6">
					<table width="380" border="1">
						<tr>
							<td><h5>Nama Siswa</h5></td>
							<td><?php echo $v->nama ?></td>
						</tr>
						<tr>
							<td><h5>NIS</h5></td>
							<td><?php echo $v->nis ?></td>
						</tr>
						<tr>
							<td><h5>Jurusan</h5></td>
							<td><?php echo $v->jurusan ?></td>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					<table width="380" border="1">
						<tr>
							<td><h5>Kelas</h5></td>
							<input type="text" value="<?php echo $v->kelas ?>" name="kelas" hidden>
							<td><?php echo $v->kelas ?></td>
						</tr>
						<tr>
							<td><h5>Tahun Ajaran</h5></td>
							<input type="text" value="<?php echo $v->tahun ?>" name="tahun" hidden>
							<td><?php echo date("Y"); ?>/<?php $date = date("Y"); $date=$date+1; echo $date; ?></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="row" style="padding-top: 2em;padding-bottom: 2em" align="center">
				<div class="col-md-6">
					<table width="380" border="1">
						<tr>
							<td><br></td>
						</tr>
						<tr>
							<td><h5>Jumlah Kehadiran</h5></td>
							<td><input type="number" name="hadir" class="form-control" placeholder="Nilai"style="width: 100px;"></td>
							<td>Hari</td>
						</tr>
						<tr>
							<td><br><br></td>
						</tr>
						<tr>
							<td><h5><b>Ketidakhadiran</b></h5></td>
						</tr>
						<tr>
							<td><h5>Izin</h5></td>
							<td><input type="number" name="izin" class="form-control" placeholder="Nilai"style="width: 100px;"></td>
							<td>Hari</td>
						</tr>
						<tr>
							<td><h5>Sakit</h5></td>
							<td><input type="number" name="sakit" class="form-control" placeholder="Nilai"style="width: 100px;"></td>
							<td>Hari</td>
						</tr>
						<tr>
							<td><h5>Alpa</h5></td>
							<td><input type="number" name="alpha" class="form-control" placeholder="Nilai"style="width: 100px;"></td>
							<td>Hari</td>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					<table width="380" border="1">
						<tr>
							<td><br></td>
						</tr>
						<tr><?php $d = date('Y')-$v->tahun;  ?>
							<td><h5>Semester</h5></td>
									<td><h5><select name="semester" class="form-control">
										<?php if ($d==0): ?>
										<option value="1">Semester Ganjil</option>
										<option value="2">Semester Genap</option>
										<?php endif ?>
										<?php if ($d==1): ?>
										<option value="3">Semester Ganjil</option>
										<option value="4">Semester Genap</option>
										<?php endif ?>
										<?php if ($d==2): ?>
										<option value="5">Semester Ganji</option>
										<option value="6">Semester Gepan</option></select></h5></td>
										<?php endif ?>
						</tr>
						<tr>
							<td><h5>Bulan</h5></td>
							<td>
								<select class="form-control" name="bulan" style="width: 250px;">
									<option value="bulan">-Pilih Bulan-</option>
									<option value="Januari">Januari</option>
									<option value="Februari">Februari</option>
									<option value="Maret">Maret</option>
									<option value="April">April</option>
									<option value="Mei">Mei</option>
									<option value="Juni">Juni</option>
									<option value="Juli">Juli</option>
									<option value="Agustus">Agustus</option>
									<option value="September">September</option>
									<option value="Oktober">Oktober</option>
									<option value="November">November</option>
									<option value="Desember">Desember</option>
								</select>
							</td>
						</tr>
					</table><input type="text" value="<?php echo $v->nis ?>" name="nis" hidden>
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
					<center><b><a href="<?php echo base_url() ?>absen/presensi" class="btn btn-danger">Batal</a></b></center>
				</div>
			</div>
		</div>
		<div style="background-color:#DCDDE1; width:200px; height:10px; margin-left:350px; margin-top:-15px; margin-bottom: 20px;"></div>
	</div>
</div>
</div>
</form>