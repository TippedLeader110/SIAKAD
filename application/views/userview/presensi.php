<div class="container" style="border-width:0px; background-color:#DCDDE1; padding-top: 10px; padding-bottom: 20px;">
<div class="container" style="border-width:1px; background-color:#DCDDE1;">
	<div style="background-color:#DCDDE1; width:200px; height:30px; margin-left:350px; margin-top:-15px;">
		<h5 align="center"><b>Rekapitulasi Presensi Siswa</b></h5>	
	</div>
	<div class="row"><?php foreach ($murid as $key => $v): ?>
		
	<?php endforeach ?>
		<div class="col-md-12"><form method="post" action="<?php echo base_url() ?>Absen/pressave">
			<div class="row" align="center" style="padding-top: 2em">
				<div class="col-md-6">
					<table style="min-width: 250px;">
						<tr>
							<td>Nama Siswa</td>
							<td><?php echo $v->nama ?></td>
						</tr>
						<tr>
							<td>NIS</td>
							<td><?php echo $v->nis ?></td>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					<table style="min-width: 250px;">
						<tr>
							<td>Kelas </td>
							<td><?php echo $v->kelas ?></td>
							<input type="text" value="<?php echo $v->kelas ?>" name="kelas" hidden>
						</tr>
						<tr>
							<td>Tahun ajaran</td> 
							<input type="text" hidden name="tahun" value="<?php echo $v->tahun ?>">
							<td><?php echo date("Y"); ?>/<?php $date = date("Y"); $date=$date+1; echo $date; ?></td>
						</tr>
					</table> 
				</div>
			</div>
			<div class="row" style="padding-top: 2em;padding-bottom: 2em" align="center">
				<div class="col-md-6">
					<table style="min-width: 310px;">
						<tr>
							<td>Jumlah Kehadiran</td>
							<td><input type="number" name="hadir" class="form-control" placeholder="Masukkan Nilai"style="width: 100px;"></td>
							<td>Hari</td>
						</tr>
						<tr>
							<td>Ketidakhadiran</td>
						</tr>
						<tr>
							<td>Izin</td>
							<td><input type="number" name="izin" class="form-control" placeholder="Masukkan Nilai"style="width: 100px;"></td>
							<td>Hari</td>
						</tr>
						<tr>
							<td>Sakit</td>
							<td><input type="number" name="sakit" class="form-control" placeholder="Masukkan Nilai"style="width: 100px;"></td>
							<td>Hari</td>
						</tr>
						<tr>
							<td>Alpa</td>
							<td><input type="number" name="alpha" class="form-control" placeholder="Masukkan Nilai"style="width: 100px;"></td>
							<td>Hari</td>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					<table>
						<tr><?php $d = date('Y')-$v->tahun;  ?>
							<td>Semester</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
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
							<td>Bulan</td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
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
		<div style="background-color:#DCDDE1; width:200px; height:10px; margin-left:350px; margin-top:-15px; margin-bottom: 20px;"></div>
	</div>
</div>
</div>
<div style="width:200px; height:30px; margin-left:350px; margin-top:-15px;"></div>
<div class="row">
	<div class="col-md-2">
		<div class="container" style="border-width:0px; color:white; font-weight:500; margin-left: 365px; margin-top: 30px;">
			<center><button type="submit" class="btn primary">Simpan</button></center>
		</div>
	</div>
	<div class="col-md-2">
		<div class="container" style="border-width:0px; font-weight:500; color:white; margin-left: 290px; margin-top: 30px;">
			<center><b><a href="#" class="btn btn-danger">Batal</a></b></center>
		</div>
	</div>
</div></form>