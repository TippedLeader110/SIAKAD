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
					<div class="col-md-9">
						<input class="form-control" style="max-width: 400px;" placeholder="Cari Nama" type="text" name="cari" onkeypress="cari()">
					</div>
					<div class="col-md-3" style="text-align: right;">
						<button class="btn btn-primary">Tambah Murid</button>
					</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered table-striped">
						<tr>
							<th>NIS</th><th>Nama</th><th>Kelas</th><th>Jurusan</th><th>Angkatan</th>
						</tr>
						<?php 
			$batas = 0;
			foreach ($muridtam as $key => $v) {
				$wow = $v->kelas-2018+1;
				$batas++;
				echo "<tr>
						<th>".$v->nis."</th><th>".$v->nama."</th><th>".$wow."</th><th>".$v->jurusan."</th><th>".$v->tahun."</th>
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
