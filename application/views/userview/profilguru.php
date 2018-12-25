<div class="row">
	<div class="col-md-12">	
		<div class="container" style="border-width: 0px; ">
<div class="row">
	<div class="col-md-8">
		
		<div class="row">
				<div class="col-md-4">
					<div class="container" style="background-color:#2F669F; border-width: 0px;  width: 150px; margin-top: 30px;">
						<center><a class="active" style="color:white; text-decoration: none;" href="http://localhost/SIAKAD/Profil/guru">Data Sekolah</a></center>
					</div><?php foreach ($arra as $key => $v) {} ?>
				</div>
				<div class="col-md-4">
					<div class="container" style="background-color:#8DB3DA; border-width: 0px;  width: 150px; margin-left: 10px;  margin-top: 30px; margin-bottom: 15px;">
						<center><a href="http://localhost/SIAKAD/Profil/guru1" style="text-decoration: none;">Data Pribadi</a></center>
					</div>
				</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
				<input type="text" hidden name="id" value="<?php echo $nip ?>">
						NIP = <?php echo $v->nip; ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
						Nama = <?php echo $v->nama ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
						Golongan PNS = <?php echo $v->gol ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500;">
						Mengajar di Kelas = <?php echo $v->kode_mapel ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500; margin-bottom: 200px;">
						Mata Pelajaran = <?php echo $v->mapel ?>
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
