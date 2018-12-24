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
			<div class="row">
				<div class="col-md-12">
					<table>
					<tr>
						<td><form method="post" action="<?php echo base_url() ?>admin/jurusanIPACari"><input type="text" hidden name="tent" value="nama">
							<input  class="form-control" style="max-width: 200px;" placeholder="Cari Nama" type="text" name="cari" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="cari"></form></td>
						<td>
							<form method="post" action="<?php echo base_url() ?>admin/jurusanIPACari">
							<input hidden type="text" name="tent" value="tahun">
							<input  class="form-control" style="max-width: 200px;" placeholder="Cari Tahun Angkatan" type="text" name="cari" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="cari"></form>	
						</td>
						<td>
							<form action="<?php echo base_url() ?>admin/jurusanIPA">
							<button class="btn" type="submit">Tampilkan Semua</button>
							</form>	
						</td>
					</tr>
					</table>
				</div>
			</div>
			<div class="row" style="margin-bottom: 10px;margin-top: 10px;">
					<div class="col-md-12"><table><form method="post" action="<?php echo base_url() ?>admin/aturkelas">
						<tr>
							<td><button class="btn btn-primary" name="tampil">Atur Kelas</button></td>
								<td><select name="kelas" class="form-control">
									<?php foreach ($kelas as $key => $v): ?>
									<option value="">A</option>
										
									<?php endforeach ?>
									<!-- <option value="B">B</option>
									<option value="C">C</option> -->
									</select></td>
						</tr>
					</table> 
					</div>
			</div>			
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-striped">
						<tr>
							<th>CB</th><th>NIS</th><th>Nama</th><th>Kelas</th><th>Jurusan</th><th>Angkatan</th>
						</tr>
						<?php 
						$batas = 0;
						foreach ($guru as $key => $v) {
						echo "<tr>
						<th><input style='width: 10px;' type='checkbox' name='ck[]' value='".$v->nis."' /></th><th>".$v->nis."</th><th>".$v->nama."</th><th>".$v->kelas."</th><th>".$v->jurusan."</th><th>".$v->tahun."</th>
							</tr>";
						$batas++;
						} ?>
					</table></form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
