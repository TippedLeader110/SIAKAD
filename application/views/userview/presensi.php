<div class="container" style="border-width:0px; background-color:#DCDDE1; padding-top: 10px; padding-bottom: 20px;">
<div class="container" style="border-width:1px; background-color:#DCDDE1;">
	<div style="background-color:#DCDDE1; width:200px; height:30px; margin-left:350px; margin-top:-15px;">
		<h5 align="center"><b>DATA SISWA</b></h5>	
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row" align="center" style="padding-top: 2em">
				<div class="col-md-6">
					<table style="min-width: 250px;">
						<tr>
							<td>Nama Siswa</td>
							<td>$nama_siswa</td>
						</tr>
						<tr>
							<td>NIS</td>
							<td>$nis</td>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					<table style="min-width: 250px;">
						<tr>
							<td>Kelas </td>
							<td>$kelas</td>
						</tr>
						<tr>
							<td>Tahun ajaran</td> 
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
							<td><input type="number" class="form-control" placeholder="Masukkan Nilai"style="width: 100px;"></td>
							<td>Hari</td>
						</tr>
						<tr>
							<td>Ketidakhadiran</td>
						</tr>
						<tr>
							<td>Izin</td>
							<td><input type="number" class="form-control" placeholder="Masukkan Nilai"style="width: 100px;"></td>
							<td>Hari</td>
						</tr>
						<tr>
							<td>Sakit</td>
							<td><input type="number" class="form-control" placeholder="Masukkan Nilai"style="width: 100px;"></td>
							<td>Hari</td>
						</tr>
						<tr>
							<td>Alpa</td>
							<td><input type="number" class="form-control" placeholder="Masukkan Nilai"style="width: 100px;"></td>
							<td>Hari</td>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					<table>
						<tr>
							<td>Semester</td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td>
								<select class="form-control" style="width: 250px;">
									<option value="semester">-Pilih Semester-</option>
									<option value="semester">Semester Ganjil</option>
									<option value="semester">Semester Genap</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Bulan</td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td>
								<select class="form-control" style="width: 250px;">
									<option value="bulan">-Pilih Bulan-</option>
									<option value="bulan">Januari</option>
									<option value="bulan">Februari</option>
									<option value="bulan">Maret</option>
									<option value="bulan">April</option>
									<option value="bulan">Mei</option>
									<option value="bulan">Juni</option>
									<option value="bulan">Juli</option>
									<option value="bulan">Agustus</option>
									<option value="bulan">September</option>
									<option value="bulan">Oktober</option>
									<option value="bulan">November</option>
									<option value="bulan">Desember</option>
								</select>
							</td>
						</tr>
					</table>
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
			<center><b><a href="#" class="btn btn-primary">Simpan</a></b></center>
		</div>
	</div>
	<div class="col-md-2">
		<div class="container" style="border-width:0px; font-weight:500; color:white; margin-left: 290px; margin-top: 30px;">
			<center><b><a href="#" class="btn btn-danger">Batal</a></b></center>
		</div>
	</div>
</div>