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
$v12z = $v12->izin;
$v12a = $v12->alpha;
$v12k = $v12->sakit;
$v12w = $v12z+$v12a+$v12k;	
$v11z = $v11->izin;
$v11a = $v11->alpha;
$v11k = $v11->sakit;
$v11w = $v11z+$v11a+$v11k;	
$v10z = $v10->izin;
$v10a = $v10->alpha;
$v10k = $v10->sakit;
$v10w = $v10z+$v10a+$v10k;	
$v9z = $v9->izin;
$v9a = $v9->alpha;
$v9k = $v9->sakit;
$v9w = $v9z+$v9a+$v9k;	
$v8z = $v8->izin;
$v8a = $v8->alpha;
$v8k = $v8->sakit;
$v8w = $v8z+$v8a+$v8k;	
$v7z = $v7->izin;
$v7a = $v7->alpha;
$v7k = $v7->sakit;
$v7w = $v7z+$v7a+$v7k;	
$v6z = $v6->izin;
$v6a = $v6->alpha;
$v6k = $v6->sakit;
$v6w = $v6z+$v6a+$v6k;	
$v5z = $v5->izin;
$v5a = $v5->alpha;
$v5k = $v5->sakit;
$v5w = $v5z+$v5a+$v5k;
$v4z = $v4->izin;
$v4a = $v4->alpha;
$v4k = $v4->sakit;
$v4w = $v4z+$v4a+$v4k;
$v3z = $v3->izin;
$v3a = $v3->alpha;
$v3k = $v3->sakit;
$v3w = $v3z+$v3a+$v3k;
$v1z = $v1->izin;
$v1a = $v1->alpha;
$v1k = $v1->sakit;
$v1w = $v1z+$v1a+$v1k;
$v2z = $v2->izin;
$v2a = $v2->alpha;
$v2k = $v2->sakit;
$v2w = $v2z+$v2a+v2k;
if ($t%2==0) {
echo "<div class='row' style='padding-top: 2em'>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;'>
			<table style='margin-left: 1em;'>
				<tr>
					<td><h6 style='padding-top: 2em;margin-right: 10px'><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
					<td><h6 style='padding-top: 2em'>".$v7->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v7->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v7->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v7->alpha."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>".$v7w."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".$v8->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v8->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v8->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v8->alpha."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>".$v8w."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".$v9->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v9->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v9->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v9->alpha."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>".$v9w."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
			</table>
		</div>
	</div>		
</div>
<div class='row' style='margin-top: -10px;'>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 110px'>Juli</h4>			
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 90px'>Agustus</h4>			
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 75px'>September</h4>			
		</div>
	</div>
</div>
<div class='row' style='padding-top: 2em'>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;'>
			<table style='margin-left: 1em;'>
				<tr>
					<td><h6 style='padding-top: 2em;margin-right: 10px'><b>Jumlah Kehadiran&nbsp;:</b></h6></td>
					<td><h6 style='padding-top: 2em'>".$v10->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v10->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v10->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v10->alpha."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>".$v10w."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".$v11->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v11->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v11->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v11->alpha."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>".$v11w."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".$v12->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v12->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v12->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v12->alpha."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>".$v12w."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
			</table>
		</div>
	</div>		
</div>
<div class='row' style='margin-top: -10px;'>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 85px'>Oktober</h4>			
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 75px'>November</h4>			
		</div>
	</div>
	<div class='col-md-4'>
		<div class='container' style='border-width: 1px;border-color: #d6d6c2;padding-bottom: 1em; margin-right: 16px;padding-top: 1em;background: 	#A9A9A9;'>
			<h4 style='margin-left: 80px'>Desember</h4>			
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
					<td><h6 style='padding-top: 2em'>".$v1->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v1->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v1->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v1->alpha."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>".$v1w."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".$v2->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v2->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v2->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v2->alpha."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>".$v2w."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".$v3->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v3->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v3->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v3->alpha."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>".$v3w."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".$v4->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v4->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v4->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v4->alpha."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>".$v4w."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".$v5->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v5->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v5->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v5->alpha."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>".$v5w."</h6></td>
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
					<td><h6 style='padding-top: 2em'>".$v6->hadir."</h6></td>
					<td><h6 style='padding-top: 2em;margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'><b>Ketidakhadiran</b></h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>1) Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v6->izin."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>2) Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v6->sakit."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-right: 10px'>3) Alpa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h6></td>
					<td><h6 style='margin-left: 5px'>".$v6->alpha."</h6></td>
					<td><h6 style='margin-left: 5px'>Hari</h6></td>
				</tr>
				<tr>
					<td><h6 style='margin-left: 95px'>Total :</h6></td>
					<td><h6 style='margin-left: 5px'>".$v6w."</h6></td>
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