<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row">
		<h3>Dashboard</h3>
		<hr>
</div>
<div class="row" style="padding-left: 10px">
	<div class="col-md-3 offset-md-1" style="background: #4cddc0;height: 120px;margin-right: 10px;border-radius: 8px;" >
		<div class="row" style="padding-top: 15px;">
			<div class="col-md-5" style="margin-right: px;">
				<img src="<?php echo base_url() ?>/img/icon/student-icon.png" style="max-height: 88px;max-width: 88px">
			</div>
			<div class="col-md-7">
				<h4 style="color: white">Total Murid <br><?php echo $jumlahmurid; ?></h4>
			</div>
		</div>
	</div>
	<div class="col-md-3" style="background: #ffba57;height: 120px;border-radius: 8px;margin-right: 10px;" >
		<div class="row" style="padding-top: 15px;">
			<div class="col-md-5" style="margin-right: px;">
				<img src="<?php echo base_url() ?>/img/icon/icon-profil-guru.png" style="max-height: 88px;max-width: 88px">
			</div>
			<div class="col-md-7">
				<h4 style="color: white">Total Guru <br><?php echo $jumlahguru; ?></h4>
			</div>
		</div>
	</div>
	<div class="col-md-3" style="background: #ff6982;height: 120px;border-radius: 8px;" >
		<div class="row" style="padding-top: 15px;">
			<div class="col-md-5" style="margin-right: px;">
				<img src="<?php echo base_url() ?>/img/icon/kelas.png" style="max-height: 88px;max-width: 88px">
			</div>
			<div class="col-md-7">
				<h4 style="color: white">Total Kelas <br><?php echo $jumlahkelas; ?></h4>
			</div>
		</div>
	</div>
	
</div>
<div class="row" style="margin-top: 30px;">
	<h4>Murid Baru</h4>
	<div class="col-md-12">
	<div class="container-fluid tab">
		<table class="table table-bordered table-striped">
			<tr>
				<th>NISN</th><th>Nama</th><th>Kelas</th><th>Jurusan</th>
			</tr>
			<?php 
			$batas = 0;
			foreach ($muridbaru as $key => $v) {
				$wow = $v->kelas-2018+1;
				$batas++;
				echo "<tr>
						<th>".$v->nis."</th><th>".$v->nama."</th><th>".$wow."</th><th>".$v->jurusan."</th>
					</tr>";
				if ($batas==10) {
					break;
				}
			} ?>
		</table>
	</div></div>
</div>
</div>