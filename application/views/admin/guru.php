<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<div class="container" style="background-color: white; border-width: 1px; border-color: #b8b894; padding: 15px 15px 10px 10px; box-shadow: 0.5px 0.5px 0.5px 0.5px grey;  padding-bottom: 20px;">
		<h3 style="color: #2F669F;"><b>Kontrol Guru</b></h3>
	</div>
</div>
<div class="container" style="border-width: 1px; border-color: #b8b894; background-color: white; padding: 15px 15px 10px 10px; box-shadow: 0.5px 0.5px 0.5px 0.5px grey; margin-top: -30px;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="row"  style="color: #2F669F; padding-left: 15px; padding-bottom: 10px;">
						<h4>Selamat datang, <b><?php echo $_SESSION['admin']; ?></b></h4>						
					</div>
				<div class="container" style="background: #ffa500;height: 185px; margin-bottom: 20px;">
					<table style="margin-top: 15px;" border="0">
						<tr>
							<td rowspan="3" colspan="2" style="padding-left: 10px;"><img src="<?php echo base_url() ?>/img/icon/icon-profil-guru.png" style="max-height: 144px;max-width: 144px"></td>
							<td style="padding-left: 10px; color: white;">
								<h4>Total Guru</h4>
							</td>
							<td >
								<h4 style="padding-left: 10px;  color: white;">:</h4>
							</td>
							<td>
								<h4 style="padding-left: 10px;  color: white;"> <?php echo "$jumlahguru"; ?></h4>
							</td>
							<td style="min-width: 500px;" align="right">
								<a href="<?php echo base_url() ?>admin/wali"><button class="btn btn-primary">Atur Walikelas</button></a>
							</td>
						</tr>
						<tr>
							<td style="padding-left: 10px;  color: white;">
								<h4>Guru Aktif</h4>
							</td>
							<td style="padding-left: 10px;  color: white;">
								<h4>:</h4>
							</td>
							<td>
								<td style="min-width: 500px;" align="right">
								<a href="<?php echo base_url() ?>admin/daftarmapel"><button class="btn btn-primary" style="margin-left: 300px;">Daftar Mata Pelajaran</button></a>
							</td>
							</td>
						</tr>
						<tr>
							<td>
								<h4  style="padding-left: 10px;  color: white;">Guru Non Aktif	</h4>
							</td>
							<td>
								<h4  style="padding-left: 10px;  color: white;">:</h4>
							</td>
							<td>
								<h4  style="padding-left: 10px;  color: white;">
									
								</h4>
							</td>
						</tr>						
					</table>
				</div>
			</div>
			<div class="col-md-3">
				<div class="container" style="background: #0073e6;height: 220px; padding-bottom: 20px;">
				<center>
					<table style="margin-top: 10px">
						<tr align="center">
							<td>
								<div class="circle" style="max-height: 140px; max-width: 140px; min-height: 140px; min-width: 140px; padding-top: 10px;" title="Pengumuman">
									<a href="<?php echo base_url() ?>admin/post">
									<img src="<?php echo base_url() ?>/img/icon/post.png" style="max-height: 120px;max-width: 120px">
								</a>
								</div>
								
							</td>
						</tr>
						<tr align="center">
							<td style="padding-top: 5px; padding-bottom: 5px;"><h5><a href="<?php echo base_url() ?>admin/Daftar_murid" style="text-decoration: none; color:white;">Pengumuman</a></h5></td>
						</tr>
					</table>
				</center>
				</div>
			</div>
			<!--
			<div class="col-md-3">
				<div class="container" style="background: white;height: 185px;">
					<center>
					<table style="margin-top: 15px">
						<tr align="center" style="">
							<td><a href="<?php echo base_url() ?>admin/post"><img src="<?php echo base_url() ?>/img/icon/post.png" style="max-height: 104px;max-width: 104px"></td></a>
						</tr>
						<tr align="center">
							<td><h4><a href="<?php echo base_url() ?>admin/post">Pengumuman</a></h4></td>
						</tr>
					</table>
				</center>
				</div>
			</div>
			-->
			<div class="col-md-3">
				<div class="container" style="background: #0073e6;height: 220px;">
				<center>
					<table style="margin-top: 10px">
						<tr align="center">
							<td>
								<div class="circle" style="max-height: 140px; max-width: 140px; min-height: 140px; min-width: 140px; padding-top: 10px;" title="Daftar Guru">
									<a href="<?php echo base_url() ?>admin/Daftar_guru">
									<img src="<?php echo base_url() ?>/img/icon/table.png" style="max-height: 120px;max-width: 120px">
								</a>
								</div>
								
							</td>
						</tr>
						<tr align="center">
							<td style="padding-top: 5px; padding-bottom: 5px;"><h5><a href="<?php echo base_url() ?>admin/Daftar_murid" style="text-decoration: none; color:white;">Lihat Semua Guru</a></h5></td>
						</tr>
					</table>
				</center>
				</div>
			</div>
			<!-- -->
			<div class="col-md-3">
				<div class="container" style="background: #0073e6;height: 220px;">
				<center>
					<table style="margin-top: 10px">
						<tr align="center">
							<td>
								<div class="circle" style="max-height: 140px; max-width: 140px; min-height: 140px; min-width: 140px; padding-top: 20px;" title="Atur Kode Guru">
									<a href="<?php echo base_url() ?>admin/guruIPA">
									<img src="<?php echo base_url() ?>/img/icon/class.png" style="max-height: 100px;max-width: 100px">
								</a>
								</div>
								
							</td>
						</tr>
						<tr align="center">
							<td style="padding-top: 5px; padding-bottom: 5px;"><h5><a href="<?php echo base_url() ?>admin/guruIPA" style="text-decoration: none; color:white;">Atur Kode Guru</a></h5></td>
						</tr>
					</table>
				</center>
				</div>
			</div>
			<!-- -->
			<div class="col-md-3">
				<div class="container" style="background: #0073e6;height: 220px;">
				<center>
					<table style="margin-top: 10px">
						<tr align="center">
							<td>
								<div class="circle" style="max-height: 140px; max-width: 140px; min-height: 140px; min-width: 140px; padding-top: 10px;" title="Atur Status Guru">
									<a href="<?php echo base_url() ?>admin/gurustatus">
									<img src="<?php echo base_url() ?>/img/icon/active.png" style="max-height: 110px;max-width: 120px">
								</a>
								</div>
								
							</td>
						</tr>
						<tr align="center">
							<td style="padding-top: 5px; padding-bottom: 5px;"><h5><a href="<?php echo base_url() ?>admin/gurustatus" style="text-decoration: none; color:white;">Atur Status Guru</a></h5></td>
						</tr>
					</table>
				</center>
				</div>
			</div>
			<!-- -->
		</div>
		<div>
			
		</div>
	</div>
</div>
</div>
</div>
				<!-- <div class="col-md-3 offset-md-1" style="background: #4cddc0;height: 120px;margin-right: 10px;border-radius: 8px;" >
				<div class="row" style="padding-top: 15px;">
					<div class="col-md-5" style="margin-right: px;">
						<img src="<?php echo base_url() ?>/img/icon/student-icon.png" style="max-height: 88px;max-width: 88px">
					</div>
						<div class="col-md-7">
							<h4 style="color: white">Total Murid <br><?php echo $jumlahmurid; ?></h4>
						</div>
					</div>
			</div>
				<div class="col-md-3" style="background: #4cddc0;height: 120px;margin-right: 10px;border-radius: 8px;" >
				<div class="row" style="padding-top: 15px;">
					<div class="col-md-5" style="margin-right: px;">
						<img src="<?php echo base_url() ?>/img/icon/student-icon.png" style="max-height: 88px;max-width: 88px">
					</div>
						<div class="col-md-7">
							<h4 style="color: white">Total Siswa <br><?php echo $jumlahmurida; ?></h4>
						</div>
					</div>
			</div>
				<div class="col-md-3" style="background: #4cddc0;height: 120px;margin-right: 10px;border-radius: 8px;" >
				<div class="row" style="padding-top: 15px;">
					<div class="col-md-5" style="margin-right: px;">
						<img src="<?php echo base_url() ?>/img/icon/student-icon.png" style="max-height: 88px;max-width: 88px">
					</div>
						<div class="col-md-7">
							<h4 style="color: white">Total Siswi <br><?php echo $jumlahmurid; ?></h4>
						</div>
					</div>
			</div> -->