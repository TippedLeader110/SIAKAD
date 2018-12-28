<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<div class="container" style="background-color: white; border-width: 1px; border-color: #b8b894; padding: 15px 15px 10px 10px; box-shadow: 0.5px 0.5px 0.5px 0.5px white;">
			<h3 style="color: #2F669F;"><b>Artikel</b></h3>
		</div>
</div>
	<div class="container-fluid" style="background: white;padding-top: 20px;margin-left: -10px;" >
		<div class="row">
			<div class="col-md-12">
				<h4>Daftar Semua Artikel</h4>
			</div>
		</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row" style="margin-bottom: 10px;">
					<div class="col-md-4">
						<form method="post">
							<input  class="form-control" style="max-width: 200px;" placeholder="Cari Nama" type="text" name="cari" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="cari">&nbsp;
						</form>
					</div>
					<div class="col-md-4">
						<form method="post">
							<input  class="form-control" style="max-width: 200px;" placeholder="Cari Isi" type="text" name="angkatan" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="angkatan">
						</form>
					</div>
					<?php 

					if (isset($_POST['cari'])) {
						$s=$_POST['cari'];
						redirect("/admin/post/$s/nama",location);
					}
					if (isset($_POST['angkatan'])) {
						$w=$_POST['angkatan'];
						redirect("/admin/post/$w/isi",location);
					}
					
					 ?>
					<div class="col-md-1" style="margin-right: 50px;">
						<form method="post" >
						<button class="btn btn-primary" name="tampil">Tampil Semua</button>
						<a class="btn btn-primary" href="<?php echo base_url() ?> admin/rpost">Buat Pengumuman</button>
						</form>
						<?php if (isset($_POST['tampil'])) {
							redirect("/admin/post", location);
						} ?>
					</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-striped">
						<tr >
							<th>No.</th><th>Penulis</th><th>Isi</th><th>Tanggal Publish</th><th>Perintah</th>
						</tr>
						<?php 
							$batas = 0;
						foreach ($art as $key => $v) {
						$batas++;
						echo "<tr style='max-height: 40px;'>
						<th>".$v->id."</th><th>".$v->penulis."</th><th>".$v->isi."</th><th>".$v->waktu."</th><th><form method='post' action='".base_url()."admin/edit'><input type='text' hidden name='nis' value='".$v->id."'><button type='submit' class='btn btn-warning'>Info</button></form></th>
							</tr>";
						} ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

