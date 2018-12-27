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
					<div class="container" style="background-color:#2F669F; border-width: 0px; font-weight: 500; margin-top: 30px; margin-bottom: 15px; font-size: 20px; width: 170px;">
						<center><a href="<?php echo base_url() ?>Profil/tampilmurid1" style="color:white; text-decoration: none;">Data Pribadi</a></center>
					</div>
				</div>
				<div class="col-md-4">
					<div class="container" style="background-color:#8DB3DA; border-width: 0px; font-weight: 500;margin-left: 10px;  margin-top: 30px; margin-bottom: 15px; font-size: 20px; width: 170px;">
						<center><a href="<?php echo base_url() ?>Profil/tampilmurid2" style="text-decoration: none;">Data Orangtua</a></center>
					</div>
				</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<input type="text" hidden name="id" value="<?php echo $nis ?>">
				<table width="300">
				<tr>
							<td style="width: 170px;"><b>Nama</b></td>
							<td style="padding-left: 10px;"><?php echo $v->nama; ?></td>
				</tr>
				</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<table width="300">
				<tr>
						<td style="width: 170px;"><b>Tempat Lahir</b></td>
						<td style="padding-left: 10px;"><?php echo $v->tempat; ?></td>
				</tr>
				</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<table width="300">
				<tr>
						<td style="width: 170px;"><b>Jenis Kelamin</b></td>
						<td style="padding-left: 10px;"><?php echo $v->jk; ?></td>
				</tr>
				</table>	
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<table width="300">
				<tr>
						<td style="width: 170px;"><b>Alamat</b></td>
						<td style="padding-left: 10px;"><?php echo $v->alamat; ?></td>
				</tr>
				</table>	
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<table width="350">
				<tr>
						<td style="width: 170px;"><b>Email</b></td>
						<td style="padding-left: 10px;"><?php echo $v->email; ?></td>
				</tr>
				</table>	
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<table width="300">
				<tr>
						<td style="width: 170px;"><b>Agama</b></td>
						<td style="padding-left: 10px;"><?php echo $v->agama; ?></td>
				</tr>
				</table>	
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500; margin-bottom: 200px;">
				<table width="300">
				<tr>
						<td style="width: 170px;"><b>Anak ke Berapa</b></td>
						<td style="padding-left: 10px;"><?php echo $v->anak_ke; ?></td>
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
