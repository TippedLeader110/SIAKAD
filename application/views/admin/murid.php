<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<h3>Semua Murid</h3>
		<hr>
</div>
	<div class="container-fluid" style="background: white;padding-top: 20px;" >
		<div class="row">
			<div class="col-md-12">
				<h4>Daftar Semua Murid</h4>
			</div>
		</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row" style="margin-bottom: 10px;">
					<div class="col-md-8">
						<form method="post">
							<input  class="form-control" style="max-width: 300px;" placeholder="Cari Nama" type="text" name="cari" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="cari">
						</form>
					</div>
					<?php 

					if (isset($_POST['cari'])) {
						$w=$_POST['cari'];
						redirect("/admin/murid/$w",location);
					}
					
					 ?>
					<div class="col-md-1" style="margin-right: 50px;">
						<form method="post" >
						<button class="btn btn-primary" name="tampil">Tampil Semua</button>
						</form>
						<?php if (isset($_POST['tampil'])) {
							redirect("/admin/murid", location);
						} ?>
					</div>
					<div class="col-md-2" style="text-align: right;">
						<button class="btn btn-primary">Tambah Murid</button>
					</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-striped">
						<tr>
							<th>NIS</th><th>Nama</th><th>Kelas</th><th>Jurusan</th><th>Angkatan</th><th>Perintah</th>
						</tr>
						<?php 
							$batas = 0;
						foreach ($muridtam as $key => $v) {
						$wow = $v->kelas-2018+1;
						$batas++;
						echo "<tr>
						<th>".$v->nis."</th><th>".$v->nama."</th><th>".$wow."</th><th>".$v->jurusan."</th><th>".$v->tahun."</th><th><form method='post' action='info'><input type='text' hidden name='nis'><button class='btn btn-warning' name='sub' type='submit'>Info</button></form></th>
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
