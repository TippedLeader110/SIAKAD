<div class="container" style="border-width:0px; background-color:#DCDDE1; padding-top: 10px; padding-bottom: 10px;">
	<div class="container" style="border-width:1px; background-color:#DCDDE1;padding-bottom: 100px">
		<div style="background-color:#DCDDE1; width:200px; height:30px; margin-left:350px; margin-top:-15px;">
			<h5 align="center"><b>Input Presensi</b></h5>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12" style="margin-left: 14px;">
						<table>
							<tr><?php if ($_SESSION['do']!=''): ?>
								<script type="text/javascript">
									Swal(
  'Sukses!',
  'Data berhasil di simpan!',
  'success'
)
								</script>
								<?php $_SESSION['do']=''; ?>
							<?php endif ?>
								<td><form method="post" action="<?php echo base_url() ?>Absen/walikelas"><input type="text" hidden name="tent" value="nama">
							<input  class="form-control" style="max-width: 200px;" placeholder="Cari Nama" type="text" name="cari" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="cari"></form></td><td>
							<form method='post' action="<?php echo base_url() ?>Absen/walikelas">
								<input hidden type="text" name="tent" value="lain">
							<button class="btn btn-success" type="submit">Tampilkan Semua</button>
							</form>	
						</td>
							</tr>
						</table>
						
					</div>
				</div>
		<div class="row">
			<div class="container" style="border-width: 0px;">
				<div class="row">
					<table  class="table table-bordered table-stripped" style="margin-left: 30px;background: white;margin-right: 30px;text-align: center;">
						<tr>
							<th>NIS</th>
							<th>Nama</th>
							<th>Jurusan</th>
							<th>Kelas</th>
							<th>Aksi</th>
						</tr>
							<?php foreach ($murid as $key => $v): ?>
						<tr>
							<td><?php echo $v->nis ?></td>
							<td><?php echo $v->nama ?></td>
							<td><?php echo $v->jurusan ?></td>
							<td><?php echo $v->kelas ?></td>
							<td><form method="post" action="<?php echo base_url()?>absen/presensi"><input type="text" hidden name="id" value="<?php echo $v->nis ?>"><button type="submit" class="btn btn-info">Input Rekap Presensi</button></form></td>
						</tr>
							<?php endforeach ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>