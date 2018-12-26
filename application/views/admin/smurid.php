<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<div class="container" style="background-color: white; border-width: 1px; border-color: #b8b894; padding: 15px 15px 10px 10px; box-shadow: 0.5px 0.5px 0.5px 0.5px grey;">
		<h3 style="color: #2F669F;"><b>Semua Murid</b></h3>
	</div>
</div>
	<div class="container-fluid" style="background: white;padding-top: 20px;margin-left: -10px;" >
		<div class="row">
			<div class="col-md-12">
				<h4>Semua Murid</h4>
			</div>
		</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<table>
					<tr>
						<td><form method="post" action="<?php echo base_url() ?>admin/daftar_murid_cari"><input type="text" hidden name="tent" value="nama">
							<input  class="form-control" style="max-width: 200px;" placeholder="Cari Nama" type="text" name="cari" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="cari"></form></td>
						<td>
							<form method="post" action="<?php echo base_url() ?>admin/daftar_murid_cari">
							<input hidden type="text" name="tent" value="tahun">
							<select onchange="this.form.submit()" class="form-control"  style="max-width:250px; min-width: 100px;" placeholder="Cari Tahun Angkatan" type="text" name="cari" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="cari">							
								<option>- Tahun -</option>
								<?php foreach ($tahun as $key => $v): ?>
								<option value="<?php echo $v->tahun ?>"><?php echo $v->tahun ?></option>							
								<?php endforeach ?>							
							</select>
							</form>	
						</td>
						<td>
							<form action="<?php echo base_url() ?>admin/daftar_murid">
							<button class="btn" type="submit">Tampilkan Semua</button>
							</form>	
						</td>
						<td style="width: 600px;" align="right"> 
							<form action="<?php echo base_url() ?>admin/rMurid">
							<button class="btn btn-primary" type="submit">Tambah Murid</button>
							</form>	
						</td>
					</tr>
					</table>
				</div>
			</div>
			<div class="row" style="margin-top: 10px;">
				<div class="col-md-12">
					<table class="table table-bordered table-striped" width="400">
						<tr>
							<th style="width: 40px;">CB</th><th>NIS</th><th>Nama</th><th>Kelas</th><th>Jurusan</th><th>Angkatan</th><th>Aksi</th>
						</tr>
						<?php 
						$batas = 0;
						foreach ($muridtam as $key => $v) {
						echo "<tr>
						<th style='width: 40px;'><input style='width: 20px; height: 20px;' type='checkbox' name='ck[]' value='".$v->nis."' /></th><th>".$v->nis."</th><th>".$v->nama."</th><th>".$v->kelas."</th><th>".$v->jurusan."</th><th>".$v->tahun."</th><th><form method='post' action='".base_url()."admin/info'><input type='text' hidden name='nis' value='".$v->nis."'><button type='submit' class='btn btn-warning'>Info</button></form></th>
							</tr>";
						$batas++;
						} ?>
						<tr>
							<th><?php 
	echo $this->pagination->create_links();
	?></th>
						</tr>
					</table></form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
