<div class="row">
	<div class="col-md-12">	
		<div class="container" style="border-width: 0px; ">
<div class="row">
	<div class="col-md-8">
		
		<div class="row">
				<div class="col-md-4">
					<div class="container" style="background-color:#8DB3DA; border-width: 0px; font-weight: 500;width: 150px; margin-top: 30px;">
						<center><a href="http://localhost/SIAKAD/Profil/guru" style="text-decoration: none;">Data Sekolah</a></center>
						<?php foreach ($arra as $key => $v) {} ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="container" style="background-color:#2F669F; border-width: 0px;  width: 150px;font-weight: 500;margin-left: 10px;  margin-top: 30px; margin-bottom: 15px;">
						<center><a class="active" style="color:white; text-decoration: none;" href="http://localhost/SIAKAD/Profil/guru1">Data Pribadi</a></center>
					</div>
				</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
						Nama = <?php echo $v->nama; ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
						Tempat Lahir = <?php echo $v->tempat_lahir; ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
						Tanggal Lahir = <?php echo $v->tanggal_lahir; ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
						Jenis Kelamin = <?php echo $v->jk; ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
						Nomor HP = <?php echo $v->no_hp; ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
						Email = <?php echo $v->email; ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500; margin-bottom: 200px;">
						Alamat = <?php echo $v->alamat; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500; max-width: 200px; padding-top: 5px; padding-bottom: 5px; margin-top: 30px;">
			<div class="circle-2" style="margin: 10px; margin-top: 10px;">
				<img src="https://static.thenounproject.com/png/630729-200.png" style="max-width: 150px; max-height: 150px;">
			</div>
		</div>
			<div class="container" style="width: 200px; background-color:#2F669F; border-width: 0px; color:white; padding: 3px 3px 3px 3px; padding: 5px 5px 5px 5px; ">
				<center>Ubah Profil Anda</center>	
			</div>
	</div>
</div>
</div>
</div>
