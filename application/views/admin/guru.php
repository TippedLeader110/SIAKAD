<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<h3>Kontrol Guru</h3>
		<hr>
</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="container" style="background: #98f6b3;height: 185px;">
					<table style="margin-top: 15px;">
						<tr>
							<td rowspan="3"><img src="<?php echo base_url() ?>/img/icon/icon-profil-guru.png" style="max-height: 144px;max-width: 144px"></td><td><h4>Total Guru : <?php echo "$jumlahguru"; ?></h4></td>
						</tr>
						<tr>
							<td><h4>Guru Aktif :</h4></td>
						</tr>
						<tr><td><h4>Guru Non Aktif :</h4></td></tr>
					</table>
				</div>
			</div>
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
			<div class="col-md-3">
				<div class="container" style="background: white;height: 185px;">
					<center>
					<table style="margin-top: 20px">
						<tr align="center" style="">
							<td><img src="<?php echo base_url() ?>/img/icon/buku.png" style="max-height: 104px;max-width: 104px"></td>
						</tr>
						<tr align="center">
							<td><h4>Daftar Mata Pelajaran</h4></td>
						</tr>
					</table>
				</center>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-md-3">
				<div class="container" style="background: white;height: 185px;">
				<center>
					<table style="margin-top: 10px">
						<tr align="center">
							<td><a href="<?php echo base_url() ?>admin/Daftar_guru"><img src="<?php echo base_url() ?>/img/icon/table.png" style="max-height: 104px;max-width: 104px"></td></a>
						</tr>
						<tr align="center">
							<td><h4><a href="<?php echo base_url() ?>admin/Daftar_guru">Lihat Semua Guru</a></h4></td>
						</tr>
					</table>
				</center>
				</div>
			</div>
			<div class="col-md-3">
				<div class="container" style="background: white;height: 185px;">
				<center>
					<table style="margin-top: 10px">
						<tr align="center" style="">
							<td><a href="<?php echo base_url() ?>admin/wali"><img src="<?php echo base_url() ?>/img/icon/icon-profil-guru.png" style="max-height: 104px;max-width: 104px"></a></td>
						</tr>
						<tr align="center">
							<td><h4><a href="<?php echo base_url() ?>admin/wali">Atur Wali Kelas</a></h4></td>
						</tr>
					</table>
				</center>
				</div>
			</div>
			<div class="col-md-3">
				<div class="container" style="background: white;height: 185px;">
				<center>
					<table style="margin-top: 20px">
						<tr align="center" style="">
							<td><a href="<?php echo base_url() ?>admin/guruIPA"><img src="<?php echo base_url() ?>/img/icon/class.png" style="max-height: 104px;max-width: 104px"></td></a>
						</tr>
						<tr align="center">
							<td><h4><a href="<?php echo base_url() ?>admin/guruIPA">Atur Kode Guru</a></h4></td>
						</tr>
					</table>
				</center>
				</div>
			</div>
			<div class="col-md-3">
				<div class="container" style="background: white;height: 185px;">
				<center>
					<table style="margin-top: 10px">
						<tr align="center" style="">
							<td><a href="<?php echo base_url() ?>admin/gurustatus"><img src="<?php echo base_url() ?>/img/icon/active.png" style="max-height: 104px;max-width: 104px"></td></a>
						</tr>
						<tr align="center">
							<td><h4><a href="<?php echo base_url() ?>admin/gurustatus">Atur Status Guru</a></h4></td>
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