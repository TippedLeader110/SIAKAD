<!DOCTYPE>
<html>
<head>
	<title>	</title>
</head>
<body>
<div class="row" style="padding-top: 2em">
<table>
	<tr>
		<td><h4 style="margin-left: 1em;margin-right: 1em">Kelas:</h4></td>
		<td><form method="post" action="<?php echo base_url() ?>Absen/siswa">	
			<select name="sub" class="form-control">
				<option value="1"><h4>X Semester Ganjil</h4></option>
				<option value="2"><h4>X Semester Genap</h4></option>
				<option value="3"><h4>XI Semester Ganjil</h4></option>
				<option value="4"><h4>XI Semester Genap</h4></option>
				<option value="5"><h4>XII Semester Ganjil</h4></option>
				<option value="6"><h4>XII Semester Genap</h4></option>
			</select>
		</td>
		<td>
			<button class="btn btn-primary" style="margin-left: 1em">Lihat</button>
		</td></form>
	</tr>
</table>
</div>

<?php 
foreach ($ab1 as $key => $v) {
}
	
if ($t%2==0) {
echo "<div class='row' style='padding-top: 2em'>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;'>
			<table style='margin-left: 1em;'>
				<tr>
					<td><h6 style='padding-top: 2em;margin-right: 10px'><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
					<td><h6 style='padding-top: 2em'>jlh_kehadiran</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_izin</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Sakit</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Alpa</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>total</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
			</table>
		</div>
	</div>	
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;'>
			<table style='margin-left: 1em;'>
				<tr>
					<td><h6 style='padding-top: 2em;margin-right: 10px'><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
					<td><h6 style='padding-top: 2em'>jlh_kehadiran</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_izin</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Sakit</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Alpa</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>total</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
			</table>
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;'>
			<table style='margin-left: 1em;'>
				<tr>
					<td><h6 style='padding-top: 2em;margin-right: 10px'><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
					<td><h6 style='padding-top: 2em'>jlh_kehadiran</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_izin</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Sakit</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Alpa</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>total</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
			</table>
		</div>
	</div>		
</div>
<div class='row' style='margin-top: -10px;'>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 120px'>Juli</h4>			
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 120px'>Agustus</h4>			
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 120px'>September</h4>			
		</div>
	</div>
</div>
<div class='row' style='padding-top: 2em'>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;'>
			<table style='margin-left: 1em;'>
				<tr>
					<td><h6 style='padding-top: 2em;margin-right: 10px'><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
					<td><h6 style='padding-top: 2em'>jlh_kehadiran</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_izin</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Sakit</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Alpa</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>total</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
			</table>
		</div>
	</div>	
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;'>
			<table style='margin-left: 1em;'>
				<tr>
					<td><h6 style='padding-top: 2em;margin-right: 10px'><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
					<td><h6 style='padding-top: 2em'>jlh_kehadiran</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_izin</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Sakit</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Alpa</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>total</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
			</table>
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;'>
			<table style='margin-left: 1em;'>
				<tr>
					<td><h6 style='padding-top: 2em;margin-right: 10px'><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
					<td><h6 style='padding-top: 2em'>jlh_kehadiran</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_izin</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Sakit</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Alpa</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>total</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
			</table>
		</div>
	</div>		
</div>
<div class='row' style='margin-top: -10px;'>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 120px'>Oktober</h4>			
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 120px'>November</h4>			
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 120px'>Desember</h4>			
		</div>
	</div>
</div>
</body>
</html>";	
}
else {
	echo "<div class='row' style='padding-top: 2em'>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;'>
			<table style='margin-left: 1em;'>
				<tr>
					<td><h6 style='padding-top: 2em;margin-right: 10px'><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
					<td><h6 style='padding-top: 2em'>jlh_kehadiran</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_izin</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Sakit</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Alpa</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>total</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
			</table>
		</div>
	</div>	
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;'>
			<table style='margin-left: 1em;'>
				<tr>
					<td><h6 style='padding-top: 2em;margin-right: 10px'><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
					<td><h6 style='padding-top: 2em'>jlh_kehadiran</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_izin</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Sakit</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Alpa</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>total</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
			</table>
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;'>
			<table style='margin-left: 1em;'>
				<tr>
					<td><h6 style='padding-top: 2em;margin-right: 10px'><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
					<td><h6 style='padding-top: 2em'>jlh_kehadiran</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_izin</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Sakit</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Alpa</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>total</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
			</table>
		</div>
	</div>		
</div>
<div class='row' style='margin-top: -10px;'>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 120px'>Januari</h4>			
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 120px'>Februari</h4>			
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 120px'>Maret</h4>			
		</div>
	</div>
</div>
<div class='row' style='padding-top: 2em'>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;'>
			<table style='margin-left: 1em;'>
				<tr>
					<td><h6 style='padding-top: 2em;margin-right: 10px'><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
					<td><h6 style='padding-top: 2em'>jlh_kehadiran</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_izin</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Sakit</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Alpa</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>total</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
			</table>
		</div>
	</div>	
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;'>
			<table style='margin-left: 1em;'>
				<tr>
					<td><h6 style='padding-top: 2em;margin-right: 10px'><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
					<td><h6 style='padding-top: 2em'>jlh_kehadiran</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_izin</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Sakit</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Alpa</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>total</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
			</table>
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;'>
			<table style='margin-left: 1em;'>
				<tr>
					<td><h6 style='padding-top: 2em;margin-right: 10px'><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
					<td><h6 style='padding-top: 2em'>jlh_kehadiran</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_izin</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Sakit</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>jlh_Alpa</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>total</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
			</table>
		</div>
	</div>		
</div>
<div class='row' style='margin-top: -10px;'>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 120px'>April</h4>			
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 120px'>Mei</h4>			
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 120px'>Juni</h4>			
		</div>
	</div>
</div>"; 	
 } ?>

</body>
</html>