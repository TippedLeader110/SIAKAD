<div class="row">
	<div class="col-md-12">	
		<div class="container" style="border-width: 0px; ">
<div class="row">
	<div class="col-md-8">
		
		<div class="row">
				<div class="col-md-4">
					<div class="container" style="background-color:#8DB3DA; border-width: 0px; font-weight: 500;width: 150px; margin-top: 30px;">
						<center><a href="<?php echo base_url() ?>Profil/tampil" style="text-decoration: none;">Data Sekolah</a></center>
						<?php foreach ($arra as $key => $v) {} ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="container" style="background-color:#2F669F; border-width: 0px;  width: 150px;font-weight: 500;margin-left: 10px;  margin-top: 30px; margin-bottom: 15px;">
						<center><a class="active" style="color:white; text-decoration: none;" href="<?php echo base_url() ?>Profil/tampil1">Data Pribadi</a></center>
					</div>
				</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
					<table width="500">
						<tr>
							<td style="width: 130px;"><b>Nama</b></td>
							<td style="padding-left: 10px;"><?php echo $v->nama; ?></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
					<table width="500">
						<tr>
							<td style="width: 130px;"><b>Tempat Lahir</b></td>
							<td style="padding-left: 10px;"><?php echo $v->tmpt_lahir; ?></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
					<table width="500">
						<tr>
							<td style="width: 130px;"><b>Tanggal Lahir</b></td>
							<td style="padding-left: 10px;"><?php echo $v->tgl_lahir; ?></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
					<table width="500">
						<tr>
							<td style="width: 130px;"><b>Jenis Kelamin</b></td>
							<td style="padding-left: 10px;"><?php echo $v->jk; ?></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
					<table width="500">
						<tr>
							<td style="width: 130px;"><b>Nomor HP</b></td>
							<td style="padding-left: 10px;"><?php echo $v->no_hp; ?></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
					<table width="500">
						<tr>
							<td style="width: 130px;"><b>Email</b></td>
							<td style="padding-left: 10px;"><?php echo $v->email; ?></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500; margin-bottom: 200px;">
					<table width="500">
						<tr>
							<td style="width: 130px;"><b>Alamat</b></td>
							<td style="padding-left: 10px;"><?php echo $v->alamat; ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500; max-width: 200px; padding-top: 5px; padding-bottom: 5px; margin-top: 77px;">
			<div class="circle-2" style="margin: 10px; margin-top: 10px;">
				<img src="https://static.thenounproject.com/png/630729-200.png" style="max-width: 150px; max-height: 150px;">
			</div>
		</div>
	</div>
</div>
</div>
</div>
