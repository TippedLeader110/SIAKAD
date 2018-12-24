<div class="container" style="border-width:0px; background-color:#DCDDE1; padding-top: 10px; padding-bottom: 10px;">
<div class="container" style="border-width:1px; background-color:#DCDDE1;">
	<div style="background-color:#DCDDE1; width:200px; height:30px; margin-left:350px; margin-top:-15px;">
		<h5 align="center"><b>CARI SISWA</b></h5>	
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<table style="min-width: 500px;">
						<tr><td>Jurusan</td></tr>
						<tr>
							<td>
							<form action="<?php echo base_url() ?> nilai/guru">
								<select name="jurusam" class="form-control" style="width: 250px;">
								<option value="jurusan">-Pilih Jurusan-</option>
								<option value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam</option>
								<option value="Ilmu Pengetahuan Sosial">Ilmu Pengetahuan Sosial</option>
								</select> 
							</td>
						</tr>
					</table> 
				</div>
			</div>
		</div>	
		<div style="background-color:#DCDDE1; width:200px; height:10px; margin-left:350px; margin-top:-15px; margin-bottom: 20px;"></div>
	</div>
</div>
</div>

<div style="width:200px; height:30px; margin-left:350px; margin-top:-15px;"></div>
	<table class="table table-bordered table-striped">
					<tr>
					<th>No</th>
					<th>Nis</th>
					<th>Nama</th>
					<th>Stambuk</th>
					<th>Jurusan</th>
					<th>Kelas</th>
					<th>Aksi</th>
           </tr>
            <?php

            
              $batas = 0;
  
            foreac
            h ($muridtam a
            	s $key => $v) {
            $batas++;
            echo "<tr>
      <td></td><td>".$v->nis."</td>
      <td>".$v->nama."</td>
      <td>".$v->tahun."</td>
      <td>".$v->jurusan."</td>
      <td>".$v->kelas."</td>
      <td><form action=''><button class='btn btn-primary' type='submit'>Lihat Profil</button></form></td>
    </tr>";
              if ($batas==10) {
              break;
              } 
            } ?>
          </table>
		</form>
