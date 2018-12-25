<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<h3>Kontrol Murid</h3>
		<hr>
</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="container" style="background: #f5b041;height: 185px;">
					<table style="margin-top: 15px;">
						<tr>
							<td rowspan="3"><img src="<?php echo base_url() ?>/img/icon/sekolah.png" style="max-height: 144px;max-width: 144px"></td><td><h4>Jumlah Alumni : <?php echo $alum ?></h4></td>
						</tr>
						<tr>
							<td><h4>Murid Aktif : <?php echo $jumlahmurid ?></h4></td>
						</tr>
						<tr><td><h4>Guru Aktif : <?php echo $jumlahguru ?></h4></td></tr>
					</table>
				</div>
			</div>
			<div class="col-md-6">
				<div class="container" style="background: #92c9ed;height: 185px;">
					<table style="margin-top: 15px;">
						<tr>
							<td rowspan="3"><img src="<?php echo base_url() ?>/img/icon/settings.png" style="max-height: 144px;max-width: 144px"></td><td><h4>Selamat datang <?php echo $_SESSION['admin']; ?></h4></td>
						</tr>
						<tr>
							<td><h4>Waktu Sekarang : <p id="time"></p> </h4></td>
						</tr>
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
					</table>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-md-3">
				<div class="container" style="background: white;height: 185px;">
				<center>
					<table style="margin-top: 10px;">
						<tr align="center">
							<td><a href="<?php echo base_url() ?>admin/Daftar_murid"><img src="<?php echo base_url() ?>/img/icon/table.png" style="max-height: 104px;max-width: 104px"></a></td>
						</tr>
						<tr align="center">
							<td><h4><a href="<?php echo base_url() ?>admin/Daftar_murid">Lihat Semua Murid</a></h4></td>
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
							<td><a href="<?php echo base_url() ?>admin/post"><img src="<?php echo base_url() ?>/img/icon/post.png" style="max-height: 104px;max-width: 104px"></a></td>
						</tr>
						<tr align="center">
							<td><h4><a href="<?php echo base_url() ?>admin/post">Buat Pengumuman</a></h4></td>
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
							<td><a href="<?php echo base_url() ?>admin/TheAdmin"><img src="<?php echo base_url() ?>/img/icon/admin.png" style="max-height: 104px;max-width: 104px"></a></td>
						</tr>
						<tr align="center">
							<td><a href="<?php echo base_url() ?>admin/TheAdmin"><h4>Daftar Admin</a></h4></td>
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
							<td><a href="<?php echo base_url() ?>admin/logout"><img src="<?php echo base_url() ?>/img/icon/logout.png" style="max-height: 104px;max-width: 104px"></a></td>
						</tr>
						<tr align="center">
							<td><h4><a href="<?php echo base_url() ?>admin/logout">logout</a></h4></td>
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