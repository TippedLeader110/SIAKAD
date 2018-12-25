<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
	<div class="container" style="background-color: white; border-width: 1px; border-color: #b8b894; padding: 15px 15px 10px 10px; box-shadow: 0.5px 0.5px 0.5px 0.5px grey;">
		<h3 style="color: #2F669F;"><b>Kontrol Murid</b></h3>
	</div>
	<div class="container" style="border-width: 1px; border-color: #b8b894; background-color: white; padding: 15px 15px 10px 10px; box-shadow: 0.5px 0.5px 0.5px 0.5px grey; margin-top: 20px;">
		<!-- here -->
		<div class="container-fluid" style="margin-top: 10px; margin-bottom: 10px;">
		<div class="row">
			<div class="col-md-6">
				<div class="container" style="background: #ffa500;height: 185px;">
					<table style="margin-top: 15px; color: white;">
						<tr>
							<td rowspan="3"><img src="<?php echo base_url() ?>/img/icon/student-icon.png" style="max-height: 144px;max-width: 144px"></td>
							<td style="padding-left: 20px;"><h4>Jumlah Alumni</h4></td>
							<td style="padding-left: 10px; padding-right: 10px;"><h4>:</h4></td>
						</tr>
						<tr>
							<td style="padding-left: 20px;"><h4>Murid Aktif</h4></td>
							<td style="padding-left: 10px; padding-right: 10px;"><h4>:</h4></td>
						</tr>
						<tr>
							<td style="padding-left: 20px;"><h4>Murid Non Aktif</h4></td>
							<td style="padding-left: 10px; padding-right: 10px;"><h4>:</h4></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-md-6">
				<div class="container" style="background: #ff9900;height: 185px;">
					<table style="margin-top: 15px;  color: white;">
						<tr>
							<td rowspan="3"><div class="circle" style="min-width: 150px; min-height: 150px; background-color: #0073e6; padding: 10px 10px 10px 10px;"><img src="<?php echo base_url() ?>/img/icon/sekolah.png" style="max-height: 125px;max-width: 125px"></div></td>
							<td style="padding-left: 20px;"><h4>Jumlah Murid</h4></td>
							<td style="padding-left: 10px; padding-right: 10px;"><h4>:</h4></td>
							<td style="padding-left: 10px; padding-right: 10px;"><h4><?php echo "$jumlahmurid"; ?></h4></td>
						</tr>
						<tr>
							<td style="padding-left: 20px;"><h4>Jumlah Siswa</h4></td>
							<td style="padding-left: 10px; padding-right: 10px;"><h4>:</h4></td>
							<td style="padding-left: 10px; padding-right: 10px;"><h4><?php echo "$jumlahmurida"; ?></h4></td>
						</tr>
						<tr>
							<td style="padding-left: 20px;"><h4>Jumlah Siswi</h4></td>
							<td style="padding-left: 10px; padding-right: 10px;"><h4>:</h4></td>
							<td style="padding-left: 10px; padding-right: 10px;"><h4><?php echo "$jumlahmuridi"; ?></h4></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-md-3">
				<div class="container" style="background: #0073e6;height: 220px;">
				<center>
					<table style="margin-top: 10px">
						<tr align="center">
							<td>
								<div class="circle" style="max-height: 140px; max-width: 140px; min-height: 140px; min-width: 140px; padding-top: 10px;" title="Lihat semua murid">
									<a href="<?php echo base_url() ?>admin/Daftar_murid">
									<img src="<?php echo base_url() ?>/img/icon/table.png" style="max-height: 120px;max-width: 120px">
								</a>
								</div>
								
							</td>
						</tr>
						<tr align="center">
							<td style="padding-top: 5px; padding-bottom: 5px;"><h5><a href="<?php echo base_url() ?>admin/Daftar_murid" style="text-decoration: none; color:white;">Daftar Semua Murid</a></h5></td>
						</tr>
					</table>
				</center>
				</div>
			</div>
			<div class="col-md-3">
				<div class="container" style="background: #0073e6;height: 220px;">
				<center>
					<table style="margin-top: 10px">
						<tr align="center" style="">
							<td>
								<div class="circle" style="max-height: 140px; max-width: 140px; min-height: 140px; min-width: 140px; padding-top: 10px;" title="Lihat semua Alumni">
									<a href="<?php echo base_url() ?>admin/Daftar_alumni">
									<img src="<?php echo base_url() ?>/img/icon/Alumni.png" style="max-height: 120px;max-width: 120px">
								</a>
								</div>

								
							</td>
						</tr>
						<tr align="center">
							<td style="padding-top: 10px;"><h5><a href="<?php echo base_url() ?>admin/Daftar_alumni" style="text-decoration: none; color: white;">Daftar Alumni</a></h5></td>
						</tr>
					</table>
				</center>
				</div>
			</div>
			<div class="col-md-3">
				<div class="container" style="background: #0073e6;height: 220px;">
				<center>
					<table style="margin-top: 20px">
						<tr align="center" style="">
							<td>
								<div class="circle" style="max-height: 140px; max-width: 140px; min-height: 140px; min-width: 140px; padding-top: 30px;" title="Lihat semua Alumni">
									<a href="<?php echo base_url() ?>admin/kelas">
									<img src="<?php echo base_url() ?>/img/icon/class.png" style="max-height: 90px;max-width: 90px">
								</a>
								</div>
							</td>
						</tr>
						<tr align="center">
							<td style="padding-top: 10px;"><a href="<?php echo base_url() ?>admin/kelas"><h5>Atur Kelas Murid</a></h5></td>
						</tr>
					</table>
				</center>
				</div>
			</div>
			<div class="col-md-3">
				<div class="container" style="background: white;height: 220px;">
				<center>
					<table style="margin-top: 10px">
						<tr align="center" style="">
							<td><a href="<?php echo base_url() ?>admin/muridstatus"><img src="<?php echo base_url() ?>/img/icon/active.png" style="max-height: 104px;max-width: 104px"></a></td>
						</tr>
						<tr align="center">
							<td  style="padding-top: 10px;"><h5><a href="<?php echo base_url() ?>admin/muridstatus">Atur Status Murid</a></h5></td>
						</tr>
					</table>
				</center>
				</div>
			</div>
		</div>
		<div>
			
		</div>
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