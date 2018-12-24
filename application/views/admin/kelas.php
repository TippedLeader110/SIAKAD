<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<h3>Kontrol Murid</h3>
		<hr>
</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="container" style="background: white;">
					<table style="margin-top: 15px;margin-bottom: 15px">
						<tr><td><h4><?php if ($_SESSION['flash']!='') {
							echo "<div class='alert alert-warning'>
  									<strong>Perhatian!</strong> Tolong pilih jurusan.
								</div>";
								$_SESSION['flash']='';
						} ?></h4></td></tr>
						<tr>
							<th><h3>Atur Kelas</h3></th>
						</tr>
						<tr><th colspan="2"><hr></th></tr>
						<tr>
							<td><h4>Jurusan </h4></td>
							<td><form method="post">
								<select name="jurusan" class="form-control" style="width: 250px;">
								<option value="jurusan">-Pilih Jurusan-</option>
								<option value="ipa">Ilmu Pengetahuan Alam</option>
								<option value="ips">Ilmu Pengetahuan Sosial</option>
								</select>
							</td><td> <button class="btn btn-primary" type="submit">Cari</button></td></form>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<?php 
if (isset($_POST['jurusan'])) {
	if ($_POST['jurusan']=='ipa') {
		redirect('admin/jurusanIPA');
	}
	elseif ($_POST['jurusan']=='ips') {
		redirect('admin/jurusanIPS');	
	}
	else
	{
		redirect('admin/kelas');
		$_SESSION['flash']=='1';
	}
}
 ?>
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