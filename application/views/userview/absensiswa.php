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
foreach ($ab1 as $key => $v) {}
foreach ($ab1 as $key1 => $v1){}
foreach ($ab2 as $key2 => $v2){}
foreach ($ab3 as $key3 => $v3){}
foreach ($ab4 as $key4 => $v4){}
foreach ($ab5 as $key5 => $v5){}
foreach ($ab6 as $key6 => $v6){}
foreach ($ab7 as $key7 => $v7){}
foreach ($ab8 as $key8 => $v8){}
foreach ($ab9 as $key9 => $v9){}
foreach ($ab10 as $key10 => $v10){}
foreach ($ab11 as $key11 => $v11){}
foreach ($ab12 as $key12 => $v12){}
if ($t%2==0) {
echo "<div class='row' style='padding-top: 2em'>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;'>
			<table style='margin-left: 1em;'>
				<tr>
					<td><h6 style='padding-top: 2em;margin-right: 10px'><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
					<td><h6 style='padding-top: 2em'>".v7->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v7->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v7->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v7->alpha."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".v8->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v8->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v8->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v8->alpha."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".v9->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v9->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v9->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v9->alpha."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".v11->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v11->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v11->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v11->alpha."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".v12->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v12->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v12->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v12->alpha."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".v12->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v12->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v12->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v12->alpha."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".v1->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v1->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v1->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v1->alpha."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".v2->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v2->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v2->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v2->alpha."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".v3->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v3->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v3->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v3->alpha."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".v4->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v4->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v4->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v4->alpha."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".v5->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v5->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v5->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v5->alpha."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".v6->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v6->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v6->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".v6->alpha."</h6></td>
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