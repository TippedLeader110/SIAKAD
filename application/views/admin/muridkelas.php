<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<h3>Semua Murid</h3>
		<hr>
</div>
	<div class="container-fluid" style="background: white;padding-top: 20px;margin-left: -10px;" >
		<div class="row">
			<div class="col-md-12">
				<h4>Atur Kelas Murid</h4>
			</div>
		</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row" style="margin-bottom: 10px;">
					<div class="col-md-1" style="margin-right: 50px;">
						<form method="post" >
						<button class="btn btn-primary" name="tampil">Tampil Semua</button>
						</form>
						<?php if (isset($_POST['tampil'])) {
							redirect("/admin/murid", location);
						} ?>
					</div>
					 <div class="col-md-1" style="margin-right: 50px;">
						<form method="post" action="<?php echo base_url() ?>admin/kelassimpan">
						<button class="btn btn-primary" name="tampil">Atur Kelas</button>
						<?php if (isset($_POST['atur'])) {
							redirect("/admin/atur", location);
						} ?>
					</div>
					<div class="col-md-3">
						<select name="kelas" class="form-control">
							<option value="a">A</option>
							<option value="b">B</option>
							<option value="c">C</option>
						</select>
					</div>
					<?php 

					if (isset($_POST['cari'])) {
						$s=$_POST['cari'];
						redirect("/admin/murid/$s/nama",location);
					}
					if (isset($_POST['angkatan'])) {
						$w=$_POST['angkatan'];
						redirect("/admin/murid/$w/angkatan",location);
					}
					
					 ?>
			</div>
			<div class="row">
					<div class="col-md-3">
						<form method="post">
							<input  class="form-control" style="max-width: 200px;" placeholder="Cari Nama" type="text" name="cari" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="cari">&nbsp;
						</form>
					</div>
					<div class="col-md-3">
						<form method="post">
							<input  class="form-control" style="max-width: 200px;" placeholder="Cari TahunAngkatan" type="text" name="angkatan" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="angkatan">
						</form>
					</div>
					<?php 

					if (isset($_POST['cari'])) {
						$s=$_POST['cari'];
						redirect("/admin/murid/$s/nama",location);
					}
					if (isset($_POST['angkatan'])) {
						$w=$_POST['angkatan'];
						redirect("/admin/murid/$w/angkatan",location);
					}
					
					 ?>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-striped">
						<tr>
							<th>CB</th><th>NIS</th><th>Nama</th><th>Kelas</th><th>Jurusan</th><th>Angkatan</th>
						</tr>
						<?php 
						$batas = 0;
						foreach ($muridtam as $key => $v) {
						echo "<tr>
						<th><input style='width: 10px;' type='checkbox' name='ck[$batas]' value='".$v->nis."' /></th><th>".$v->nis."</th><th>".$v->nama."</th><th>".$v->kelas."</th><th>".$v->jurusan."</th><th>".$v->tahun."</th>
							</tr>";
						$batas++;
						} ?>
					</table>
						</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

