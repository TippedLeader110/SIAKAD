<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<div class="container" style="background-color: white; border-width: 1px; border-color: #b8b894; padding: 15px 15px 10px 10px; box-shadow: 0.5px 0.5px 0.5px 0.5px white;">
		<h3 style="color: #2F669F;"><b>Kontrol Murid</b></h3>
	</div>
</div>
<div class="container" style="border-width: 1px; border-color: #b8b894; background-color: white; padding: 15px 15px 10px 10px; box-shadow: 0.5px 0.5px 0.5px 0.5px white; margin-top: -40px; margin-bottom: 30px;">
	<div class="container-fluid">
		<?php if ($_SESSION['do']!=''): ?>
								<script type="text/javascript">
									Swal(
  'Sukses!',
  'Data berhasil di simpan!',
  'success'
)
								</script>
								<?php $_SESSION['do']=''; ?>
							<?php endif ?>
	<div class="row"  style="color: #2F669F; padding-left: 15px; padding-bottom: 10px;">
		<h4>Selamat datang, <b><?php echo $_SESSION['admin']; ?></b></h4>
	</div>
		<div class="row">
			<div class="col-md-6">
				<div class="container" style="background: #ffa500;height: 185px; color: white;">
					<table style="margin-top: 15px;">
						<tr>
							<td rowspan="3" colspan="2"><img src="<?php echo base_url() ?>/img/icon/sekolah.png" style="max-height: 144px;max-width: 144px">
							</td>
							<td style="padding-left: 10px;">
								<h4>Jumlah Alumni</h4>
							</td>
							<td style="padding-left: 10px;">
								<h4>:</h4>
							</td>
							<td style="padding-left: 10px;">
								<h4><?php echo $alum ?></h4>
							</td>
						</tr>
						<tr>
							<td style="padding-left: 10px;">
								<h4>Murid Aktif</h4>
							</td>
							<td style="padding-left: 10px;">
								<h4>:</h4>
							</td>
							<td style="padding-left: 10px;">
								<h4><?php echo $jumlahmurid ?></h4>
							</td>
						</tr>
						<tr>
							<td style="padding-left: 10px;">
								<h4>Guru Aktif</h4>
							</td>
							<td style="padding-left: 10px;">
								<h4>:</h4>
							</td>
							<td style="padding-left: 10px;">
								<h4><?php echo $jumlahguru ?></h4>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-md-6">
				<div class="container" style="background: #ffa500;height: 185px; color: white;">
					<table style="margin-top: 20px;">
						<tr>
							<td rowspan="3"><img src="<?php echo base_url() ?>/img/icon/jam.png" style="max-height: 135px;max-width: 135px">
							</td>
						</tr>
						<tr>
							<td  style="padding-left: 10px;"><h4>Waktu Sekarang </h4></td>							
						</tr>
						<tr>
							<td style="padding-left: 10px;"><h5 id="time"></h5> </td>
						</tr>
						<tr>
							<td>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
						<script type="text/javascript">
						var timestamp = '<?=time();?>';
						function updateTime(){
						  $('#time').html(Date(timestamp));
						  timestamp++;
						}
						$(function(){
						  setInterval(updateTime, 1000);
						});
						</script>
							</td>
						</tr>
						
					</table>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-md-3">
				<div class="container" style="background: #0073e6;height: 220px;">
				<center>
					<table style="margin-top: 10px;">
						<tr align="center">
							<td>
								<div class="circle" style="background-color: white; min-width: 140px; min-height: 140px; padding-top: 10px;" >
									<a href="<?php echo base_url() ?>admin/Daftar_murid"><img src="<?php echo base_url() ?>/img/icon/table.png" style="max-height: 104px;max-width: 104px"></a>
								</div>								
							</td>
						</tr>
						<tr align="center">
							<td style="padding-top: 20px;"><h5><a  style="color: white;" href="<?php echo base_url() ?>admin/Daftar_murid">Lihat Semua Murid</a></h5></td>
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
								<div class="circle" style="background-color: white; min-width: 140px; min-height: 140px; padding-top: 10px;" >
									<a href="<?php echo base_url() ?>admin/post"><img src="<?php echo base_url() ?>/img/icon/post.png" style="max-height: 104px;max-width: 104px"></a>
								</div>						
							</td>
						</tr>
						<tr align="center">
							<td  style="padding-top: 20px;"><h5><a style="color: white;" href="<?php echo base_url() ?>admin/post">Buat Pengumuman</a></h5></td>
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
								<div class="circle" style="background-color: white; min-width: 140px; min-height: 140px; padding-top: 10px;" >
									<a href="<?php echo base_url() ?>admin/TheAdmin"><img src="<?php echo base_url() ?>/img/icon/admin.png" style="max-height: 104px;max-width: 104px"></a>
								</div>						
							</td>
						</tr>
						<tr align="center">
							<td  style="padding-top: 20px;"><h5><a style="color: white;" href="<?php echo base_url() ?>admin/post">Daftar Admin</a></h5></td>
						</tr>
					</table>
				</center>
				</div>
			</div>
			<!-- BATAS -->
			<div class="col-md-3">
				<div class="container" style="background: #0073e6;height: 220px;">
				<center>
					<table style="margin-top: 10px">
						<tr align="center" style="">
							<td>
								<div class="circle" style="background-color: white; min-width: 140px; min-height: 140px; padding-top: 20px;" >
									<a href="<?php echo base_url() ?>admin/logout"><img src="<?php echo base_url() ?>/img/icon/logout.png" style="max-height: 104px;max-width: 104px"></a>
								</div>						
							</td>
						</tr>
						<tr align="center">
							<td  style="padding-top: 20px;"><h5><a style="color: white;" href="<?php echo base_url() ?>admin/post">Keluar</a></h5></td>
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
				<!-- <div class="col-md-3 offset-md-1" style="background: #4cddc0;height: 140px;margin-right: 10px;border-radius: 8px;" >
				<div class="row" style="padding-top: 15px;">
					<div class="col-md-5" style="margin-right: px;">
						<img src="<?php echo base_url() ?>/img/icon/student-icon.png" style="max-height: 88px;max-width: 88px">
					</div>
						<div class="col-md-7">
							<h4 style="color: white">Total Murid <br><?php echo $jumlahmurid; ?></h4>
						</div>
					</div>
			</div>
				<div class="col-md-3" style="background: #4cddc0;height: 140px;margin-right: 10px;border-radius: 8px;" >
				<div class="row" style="padding-top: 15px;">
					<div class="col-md-5" style="margin-right: px;">
						<img src="<?php echo base_url() ?>/img/icon/student-icon.png" style="max-height: 88px;max-width: 88px">
					</div>
						<div class="col-md-7">
							<h4 style="color: white">Total Siswa <br><?php echo $jumlahmurida; ?></h4>
						</div>
					</div>
			</div>
				<div class="col-md-3" style="background: #4cddc0;height: 140px;margin-right: 10px;border-radius: 8px;" >
				<div class="row" style="padding-top: 15px;">
					<div class="col-md-5" style="margin-right: px;">
						<img src="<?php echo base_url() ?>/img/icon/student-icon.png" style="max-height: 88px;max-width: 88px">
					</div>
						<div class="col-md-7">
							<h4 style="color: white">Total Siswi <br><?php echo $jumlahmurid; ?></h4>
						</div>
					</div>
			</div> -->