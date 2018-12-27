<div class="row">
	<div class="col-md-12">	
		<div class="container" style="border-width: 0px; ">
<div class="row">
	<div class="col-md-8">
	<?php foreach ($arra as $key => $v) {} ?>
		<div class="row">
				<div class="col-md-4">
					<div class="container" style="background-color:#8DB3DA; border-width: 0px; color:white; font-weight: 500; margin-top: 30px; font-size: 20px; width: 170px;">
						<center><a href="<?php echo base_url() ?>Profil/tampilmurid" style="text-decoration: none;">Data Sekolah</a></center>
					</div>
				</div>
				<div class="col-md-4">
					<div class="container" style="background-color:#8DB3DA; border-width: 0px; font-weight: 500; margin-top: 30px; margin-bottom: 15px; font-size: 20px; width: 170px;">
						<center><a href="<?php echo base_url() ?>Profil/tampilmurid1" style="text-decoration: none;">Data Pribadi</a></center>
					</div>
				</div>
				<div class="col-md-4">
					<div class="container" style="background-color:#2F669F; border-width: 0px; font-weight: 500;margin-left: 10px;  margin-top: 30px; margin-bottom: 15px; font-size: 20px; width: 170px;">
						<center><a href="<?php echo base_url() ?>Profil/tampilmurid2" style="color:white; text-decoration: none;">Data Orangtua</a></center>
					</div>
				</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h3>Data Ayah</h3>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<input type="text" hidden name="id" value="<?php echo $nis ?>">
				<table width="300">
				<tr>
							<td style="width: 170px;"><b>Nama Ayah</b></td>
							<td style="padding-left: 10px;"><?php echo $v->nama_ayah; ?></td>
				</tr>
				</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<table width="300">
				<tr>
							<td style="width: 170px;"><b>Pendidikan Ayah</b></td>
							<td style="padding-left: 10px;"><?php echo $v->pendidikan_ayah; ?></td>
				</tr>
				</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<table width="300">
				<tr>
							<td style="width: 170px;"><b>Pekerjaan Ayah</b></td>
							<td style="padding-left: 10px;"><?php echo $v->pekerjaan_ayah; ?></td>
				</tr>
				</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<table width="300">
				<tr>
							<td style="width: 170px;"><b>Alamat Ayah</b></td>
							<td style="padding-left: 10px;"><?php echo $v->alamat_ayah; ?></td>
				</tr>
				</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<table width="300">
				<tr>
							<td style="width: 170px;"><b>Nomor HP Ayah</b></td>
							<td style="padding-left: 10px;"><?php echo $v->no_hp_ayah; ?></td>
				</tr>
				</table>
				</div>
			</div>&nbsp;
			<div class="col-md-12">
				<h3>Data Ibu</h3>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<table width="300">
				<tr>
							<td style="width: 170px;"><b>Nama Ibu</b></td>
							<td style="padding-left: 10px;"><?php echo $v->nama_ibu; ?></td>
				</tr>
				</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<table width="300">
				<tr>
							<td style="width: 170px;"><b>Pendidikan Ibu</b></td>
							<td style="padding-left: 10px;"><?php echo $v->pendidikan_ibu; ?></td>
				</tr>
				</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<table width="300">
				<tr>
							<td style="width: 170px;"><b>Pekerjaan Ibu</b></td>
							<td style="padding-left: 10px;"><?php echo $v->pekerjaan_ibu; ?></td>
				</tr>
				</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<table width="300">
				<tr>
							<td style="width: 170px;"><b>Alamat Ibu</b></td>
							<td style="padding-left: 10px;"><?php echo $v->alamat_ibu; ?></td>
				</tr>
				</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<table width="300">
				<tr>
							<td style="width: 170px;"><b>Nomor HP Ibu</b></td>
							<td style="padding-left: 10px;"><?php echo $v->no_hp_ibu; ?></td>
				</tr>
				</table>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500; max-width: 200px; padding-top: 5px; padding-bottom: 5px; margin-top: 77px;">
			<div class="circle-2" style="margin: 10px; margin-top: 10px;">
				<img src="<?php echo base_url() ?>gambar/<?php echo $v->pict ?>.png" style="max-width: 150px; max-height: 150px;">
			
			</div>
		</div>
	</div>
</div>
	</div>
</div>
</div>
