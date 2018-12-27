<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
	<div class="container" style="background-color: white; border-width: 1px; border-color: #b8b894; padding: 15px 15px 10px 10px; box-shadow: 0.5px 0.5px 0.5px 0.5px grey;">
		<h3 style="color: #2F669F;"><b>Kontrol Guru</b></h3>
	</div>
</div>
<div class="container" style="border-width: 1px; border-color: #b8b894; background-color: white; padding: 15px 15px 10px 10px; box-shadow: 0.5px 0.5px 0.5px 0.5px grey; margin-top: 20px;">
	<div class="container-fluid" style="background: white;padding-top: 20px;margin-left: -10px;" >
		<div class="row">
			<div class="col-md-12">
				<h4>Atur Kelas Mengajar Guru</h4>
			</div>
		</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<table>
					<tr>
						<td><form method="post" action="<?php echo base_url() ?>admin/guruIPSCari"><input type="text" hidden name="tent" value="nama">
							<input  class="form-control" style="max-width: 200px;" placeholder="Cari Nama" type="text" name="cari" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="cari"></form></td>
						<td>
							<form method="post" action="<?php echo base_url() ?>admin/guruIPSCari">
							<input hidden type="text" name="tent" value="tahun">
							<input  class="form-control" style="max-width: 200px;" placeholder="Cari Kode Mapel Angkatan" type="text" name="cari" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="cari"></form>	
						</td>
						<td>
							<form action="<?php echo base_url() ?>admin/jurusanIPS">
							<button class="btn" type="submit">Tampilkan Semua</button>
							</form>	
						</td>
					</tr>
					</table>
				</div>
			</div>
			<div class="row" style="margin-bottom: 10px;margin-top: 10px;">
					<div class="col-md-12"><table><form method="post" action="<?php echo base_url() ?>admin/aturkelasguru">
						<tr>
							<td><button class="btn btn-primary" name="tampil">Atur Kelas</button></td>
								<td><select name="kelas" class="form-control">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									</select></td>
						</tr>
					</table> 
					</div>
			</div>			
			<div class="row" style="margin-top: 10px;">
				<div class="col-md-12">
					<table class="table table-bordered table-striped">
						<tr>
							<th>CB</th><th>NIP</th><th>Nama</th><th>Mata Pelajaran</th><th>Wali Kelas</th><th>Mengajar Di</th>
						</tr>
						<?php 
							$batas = 0;
						foreach ($kelas as $key => $v) {
						$batas++;
						$x=$v->wali_kelas;
						if ($x=='1') {
							$x='Ya';
						}
						else{
							$x='Tidak';
						}
						echo "<tr>
						<th><input style='width: 10px;' type='checkbox' name='ck[]' value='".$v->nip."' /></th><th>".$v->nip."</th><th>".$v->nama."</th><th>".$v->mapel."</th><th>".$x."</th><th>".$v->kode_mapel."</th>
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
</div>