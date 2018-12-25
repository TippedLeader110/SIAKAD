<div class="container" style="border-width:0px; background-color:#DCDDE1; padding-top: 10px; padding-bottom: 10px;">
<div class="container" style="border-width:1px; background-color:#DCDDE1;padding-bottom: 100px">
	<div style="background-color:#DCDDE1; width:200px; height:30px; margin-left:350px; margin-top:-15px;">
		<h5 align="center"><b>CARI SISWA</b></h5>	
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6" style="padding-top: 10px; margin-right: -200px;margin-left: 20px">
					<form method="post" action="<?php echo base_url() ?>Nilai/guru">
						<table style="min-width: 300px;">
						<tr><td><h4>Jurusan</h4></td></tr>
						<tr>
							<td>
								<select name="jurusan" class="form-control" style="width: 250px;">
								<option value="jurusan"><h4>-Pilih Jurusan-</h4></option>
								<option value="ipa"><h4>Ilmu Pengetahuan Alam</h4></option>
								<option value="ips"><h4>Ilmu Pengetahuan Sosial</h4></option>
								</select> 
							</td>
						</tr>
					</table> 
				</div>
				<div class="col-md-6" style="padding-top: 10px;padding-bottom: 10px; margin-left: 50px;">
					<table style="min-width: 500px;margin-left: -70px;">
						<tr><td><h4>Kelas</h4></td></tr>
						<tr>
							<td>
								<select name="kelas" class="form-control" style="width: 250px;">
								<option value="kelas">-Pilih Tingkat-</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								</select> 
							</td>
							<td><button type="submit" class="btn btn-primary" style="min-width: 100px;margin-left: 0px;margin-right: 100px">Cari</button></td>
						</tr>
					</table> 
					</form>				
				</div>
			</div>
		</div>	
	</div>
	<div class="row">
		<div class="container" style="border-width: 0px;">
			<div class="row">
				<table class="table table-bordered table-stripped" style="margin-left: 30px;background: white;margin-right: 30px;text-align: center;">
					<tr>
						<th>NIS</th>
						<th>Nama</th>
						<th>Jurusan</th>
						<th>Kelas</th>
						<th>Aksi</th>
					</tr>
					<?php foreach ($murid as $key => $v) {
						echo "<tr>
						<td>".$v->nis."</td>
						<td>".$v->nama."</td>
						<td>".$v->jurusan."</td>
						<td>".$v->kelas."</td>
						<td><form method='post' action='".base_url()."nilai/input'><input hidden type='text' value='".$v->nis."' name='nis'><button type='submit' class='btn btn-info'>Input Nilai</button></form></td>
					</tr>";
					} ?>
				</table>
			</div>
		</div>		
	</div>
</div>
</div>
<div style="width:200px; height:30px; margin-left:350px; margin-top:-15px;"></div>

