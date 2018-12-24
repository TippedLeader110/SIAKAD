<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<h3>Semua guru</h3>
		<hr>
</div>
	<div class="container-fluid" style="background: white;padding-top: 20px;margin-left: -10px;" >
		<div class="row">
			<div class="col-md-12">
				<h4>Semua guru</h4>
			</div>
		</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<table>
					<tr>
						<td><form method="post" action="<?php echo base_url() ?>admin/daftar_guru_cari"><input type="text" hidden name="tent" value="nama">
							<input  class="form-control" style="max-width: 200px;" placeholder="Cari Nama" type="text" name="cari" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="cari"></form></td>
						<td>
							<form method="post" action="<?php echo base_url() ?>admin/daftar_guru_cari">
							<input hidden type="text" name="tent" value="tahun">
							<input  class="form-control" style="max-width: 200px;" placeholder="Cari Tahun Angkatan" type="text" name="cari" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="cari"></form>	
						</td>
						<td>
							<form action="<?php echo base_url() ?>admin/daftar_guru">
							<button class="btn" type="submit">Tampilkan Semua</button>
							</form>	
						</td>
						<td>
							<form action="<?php echo base_url() ?>admin/rguru">
							<button class="btn btn-primary" type="submit">Tambah guru</button>
							</form>	
						</td>
					</tr>
					</table>
				</div>
			</div>
			<div class="row" style="margin-top: 10px;">
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
					</table></form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
