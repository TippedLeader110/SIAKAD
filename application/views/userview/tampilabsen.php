<div class="container" style="border-width:0px; background-color:#DCDDE1; padding-top: 10px; padding-bottom: 10px;">
	<div class="container" style="border-width:1px; background-color:#DCDDE1;padding-bottom: 100px">
		<div style="background-color:#DCDDE1; width:200px; height:30px; margin-left:350px; margin-top:-15px;">
			<h5 align="center"><b>Rekapitulasi Presensi Siswa</b></h5>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<table>
							<tr>
								<td>Nis</td>
								<td>$nis</td>
							</tr>
							<tr>
								<td>Nama</td>
								<td>$nama</td>
							</tr>
							<tr>
								<td>Jurusan</td>
								<td>$jurusan</td>
							</tr>
							<tr>
								<td>Kelas</td>
								<td>$Kelas</td>
							</tr>
							<tr>
								<td>Tahun ajaran</td> 
								<input type="text" hidden name="tahun" value="<?php echo $v->tahun ?>">
								<td><?php echo date("Y"); ?>/<?php $date = date("Y"); $date=$date+1; echo $date; ?></td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table>
							<tr>
								<td>Semesster</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><h5><select name="semester" class="form-control">
									<option value="1">X Semester Ganjil</option>
									<option value="2">X Semester Genap</option>
									<option value="3">X Semester Ganjil</option>
									<option value="4">X Semester Genap</option>
									<option value="5">X Semester Ganjil</option>
									<option value="6">X Semester Genap</option>
								</select></h5></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;">
							<table style="margin-left: 1em;">
								<tr>
									<td><h6 style="padding-top: 2em;margin-right: 10px"><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
									<td><h6 style="padding-top: 2em">$hadir</h6></td>
									<td><h6 style="padding-top: 2em;margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px"><b>Ketidakhadiran</b></h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$izin</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$sakit</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$alpa</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-left: 95px">Total :</h6></td>
									<td><h6 style="margin-left: 5px">$total</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;">
							<table style="margin-left: 1em;">
								<tr>
									<td><h6 style="padding-top: 2em;margin-right: 10px"><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
									<td><h6 style="padding-top: 2em">$hadir</h6></td>
									<td><h6 style="padding-top: 2em;margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px"><b>Ketidakhadiran</b></h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$izin</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$sakit</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$alpa</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-left: 95px">Total :</h6></td>
									<td><h6 style="margin-left: 5px">$total</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;">
							<table style="margin-left: 1em;">
								<tr>
									<td><h6 style="padding-top: 2em;margin-right: 10px"><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
									<td><h6 style="padding-top: 2em">$hadir</h6></td>
									<td><h6 style="padding-top: 2em;margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px"><b>Ketidakhadiran</b></h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$izin</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$sakit</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$alpa</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-left: 95px">Total :</h6></td>
									<td><h6 style="margin-left: 5px">$total</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: -10px">
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;">
							<h4 style="margin-left: 85px">Januari</h4>			
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;">
							<h4 style="margin-left: 85px">Februari</h4>			
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;">
							<h4 style="margin-left: 85px">Maret</h4>			
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;">
							<table style="margin-left: 1em;">
								<tr>
									<td><h6 style="padding-top: 2em;margin-right: 10px"><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
									<td><h6 style="padding-top: 2em">$hadir</h6></td>
									<td><h6 style="padding-top: 2em;margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px"><b>Ketidakhadiran</b></h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$izin</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$sakit</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$alpa</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-left: 95px">Total :</h6></td>
									<td><h6 style="margin-left: 5px">$total</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;">
							<table style="margin-left: 1em;">
								<tr>
									<td><h6 style="padding-top: 2em;margin-right: 10px"><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
									<td><h6 style="padding-top: 2em">$hadir</h6></td>
									<td><h6 style="padding-top: 2em;margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px"><b>Ketidakhadiran</b></h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$izin</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$sakit</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$alpa</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-left: 95px">Total :</h6></td>
									<td><h6 style="margin-left: 5px">$total</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;">
							<table style="margin-left: 1em;">
								<tr>
									<td><h6 style="padding-top: 2em;margin-right: 10px"><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
									<td><h6 style="padding-top: 2em">$hadir</h6></td>
									<td><h6 style="padding-top: 2em;margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px"><b>Ketidakhadiran</b></h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$izin</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$sakit</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$alpa</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-left: 95px">Total :</h6></td>
									<td><h6 style="margin-left: 5px">$total</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: -10px">
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;">
							<h4 style="margin-left: 85px">April</h4>			
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;">
							<h4 style="margin-left: 85px">Mei</h4>			
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;">
							<h4 style="margin-left: 85px">Juni</h4>			
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;">
							<table style="margin-left: 1em;">
								<tr>
									<td><h6 style="padding-top: 2em;margin-right: 10px"><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
									<td><h6 style="padding-top: 2em">$hadir</h6></td>
									<td><h6 style="padding-top: 2em;margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px"><b>Ketidakhadiran</b></h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$izin</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$sakit</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$alpa</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-left: 95px">Total :</h6></td>
									<td><h6 style="margin-left: 5px">$total</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;">
							<table style="margin-left: 1em;">
								<tr>
									<td><h6 style="padding-top: 2em;margin-right: 10px"><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
									<td><h6 style="padding-top: 2em">$hadir</h6></td>
									<td><h6 style="padding-top: 2em;margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px"><b>Ketidakhadiran</b></h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$izin</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$sakit</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$alpa</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-left: 95px">Total :</h6></td>
									<td><h6 style="margin-left: 5px">$total</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;">
							<table style="margin-left: 1em;">
								<tr>
									<td><h6 style="padding-top: 2em;margin-right: 10px"><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
									<td><h6 style="padding-top: 2em">$hadir</h6></td>
									<td><h6 style="padding-top: 2em;margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px"><b>Ketidakhadiran</b></h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$izin</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$sakit</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$alpa</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-left: 95px">Total :</h6></td>
									<td><h6 style="margin-left: 5px">$total</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: -10px">
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;">
							<h4 style="margin-left: 85px">Juli</h4>			
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;">
							<h4 style="margin-left: 85px">Agustus</h4>			
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;">
							<h4 style="margin-left: 85px">September</h4>			
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;">
							<table style="margin-left: 1em;">
								<tr>
									<td><h6 style="padding-top: 2em;margin-right: 10px"><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
									<td><h6 style="padding-top: 2em">$hadir</h6></td>
									<td><h6 style="padding-top: 2em;margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px"><b>Ketidakhadiran</b></h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$izin</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$sakit</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$alpa</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-left: 95px">Total :</h6></td>
									<td><h6 style="margin-left: 5px">$total</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;">
							<table style="margin-left: 1em;">
								<tr>
									<td><h6 style="padding-top: 2em;margin-right: 10px"><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
									<td><h6 style="padding-top: 2em">$hadir</h6></td>
									<td><h6 style="padding-top: 2em;margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px"><b>Ketidakhadiran</b></h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$izin</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$sakit</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$alpa</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-left: 95px">Total :</h6></td>
									<td><h6 style="margin-left: 5px">$total</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;">
							<table style="margin-left: 1em;">
								<tr>
									<td><h6 style="padding-top: 2em;margin-right: 10px"><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
									<td><h6 style="padding-top: 2em">$hadir</h6></td>
									<td><h6 style="padding-top: 2em;margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px"><b>Ketidakhadiran</b></h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$izin</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$sakit</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-right: 10px">3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
									<td><h6 style="margin-left: 5px">$alpa</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
								<tr>
									<td><h6 style="margin-left: 95px">Total :</h6></td>
									<td><h6 style="margin-left: 5px">$total</h6></td>
									<td><h6 style="margin-left: 5px">Hari</h6></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: -10px">
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;">
							<h4 style="margin-left: 85px">Oktober</h4>			
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;">
							<h4 style="margin-left: 85px">November</h4>			
						</div>
					</div>
					<div class="col-md-4">
						<div class="container" style="border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;">
							<h4 style="margin-left: 85px">Desember</h4>			
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>