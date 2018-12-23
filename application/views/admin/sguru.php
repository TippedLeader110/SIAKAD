<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<h3>Kontrol Guru</h3>
		<hr>
</div>
	<div class="container-fluid" style="background: white;padding-top: 20px;margin-left: -10px;" >
		<div class="row">
			<div class="col-md-12">
				<h4>Daftar Semua Guru</h4>
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
							<input  class="form-control" style="max-width: 200px;" placeholder="Cari Kode Mapel" type="text" name="angkatan" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="angkatan">
						</form>
					</div>
					<?php 

					if (isset($_POST['cari'])) {
						$s=$_POST['cari'];
						redirect("/admin/guru/$s/nama",location);
					}
					if (isset($_POST['angkatan'])) {
						$w=$_POST['angkatan'];
						redirect("/admin/guru/$w/angkatan",location);
					}
					
					 ?>
					<div class="col-md-1" style="margin-right: 50px;">
						<form method="post" >
						<button class="btn btn-primary" name="tampil">Tampil Semua</button>
						</form>
						<?php if (isset($_POST['tampil'])) {
							redirect("/admin/guru", location);
						} ?>
					</div>
					<div class="col-md-2" style="text-align: right;">
						<form action="<?php echo base_url() ?>admin/rguru">
						<button class="btn btn-primary" type="submit">Tambah guru</button>
						</form>
					</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-striped">
						<tr>
							<th>NIP</th><th>Nama</th><th>Kode Mapel</th><th>Wali Kelas</th><th>Golongan PNS</th><th>Perintah</th>
						</tr>
						<?php 
							$batas = 0;
						foreach ($gurutam as $key => $v) {
						$batas++;
						$x=$v->wali_kelas;
						if ($x=='1') {
							$x='Ya';
						}
						else{
							$x='Tidak';
						}
						echo "<tr>
						<th>".$v->nip."</th><th>".$v->nama."</th><th>".$v->kode_mapel."</th><th>".$x."</th><th>".$v->gol."</th><th><form method='post' action='".base_url()."admin/info'><input type='text' hidden name='nis' value='".$v->nip."'><button type='submit' class='btn btn-warning'>Info</button></form></th>
							</tr>";
							if ($batas==10) {
							break;
							}	
						} ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

