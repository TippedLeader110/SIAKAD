<div class="container" style="border-width:0px; background-color:#DCDDE1; padding-top: 10px; padding-bottom: 10px;">
<div class="container" style="border-width:1px; background-color:#DCDDE1;padding-bottom: 100px">
	<div style="background-color:#DCDDE1; width:200px; height:30px; margin-left:350px; margin-top:-15px;">
		<h5 align="center"><b>CARI SISWA</b></h5>	
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6" style="padding-top: 10px; margin-right: -200px;margin-left: 200px">
					<table style="min-width: 500px;">
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
				<div class="col-md-6" style="padding-top: 10px;padding-bottom: 10px">
					<table style="min-width: 500px;margin-left: -70px;">
						<tr><td><h4>Kelas</h4></td></tr>
						<tr>
							<td>
								<select name="kelas" class="form-control" style="width: 250px;">
								<option value="kelas">-Pilih Kelas-</option>
								<option value="10ipaA">X IPA 1</option>
								<option value="10ipaB">X IPA 2</option>
								<option value="10ipaC">X IPA 3</option>
								<option value="11ipaA">XI IPA 1</option>
								<option value="11ipaB">XI IPA 2</option>
								<option value="11ipaC">XI IPA 3</option>
								<option value="12ipaA">XII IPA 1</option>
								<option value="12ipaB">XII IPA 2</option>
								<option value="12ipaC">XII IPA 3</option>
								<option value="10ipsA">X IPS 1</option>
								<option value="10ipsB">X IPS 2</option>
								<option value="10ipsC">X IPS 3</option>
								<option value="11ipsA">XI IPS 1</option>
								<option value="11ipsB">XI IPS 2</option>
								<option value="11ipsC">XI IPS 3</option>
								<option value="12ipsA">XII IPS 1</option>
								<option value="12ipsB">XII IPS 2</option>
								<option value="12ipsC">XII IPS 3</option>
								</select> 
							</td>
							<td><button type="submit" class="btn btn-primary" style="min-width: 100px;margin-left: 0px;margin-right: 100px">Cari</button></td>
						</tr>
					</table> 
				</div>
			</div>
		</div>	
	</div>
	<div class="row">
		<div class="container" style="border-width: 0px;">
			<div class="row">
				<table class="table table-bordered table-stripped" style="margin-left: 30px;background: white;margin-right: 30px;text-align: center;">
					<tr>
						<th>Nis</th>
						<th>Nama</th>
						<th>Jurusan</th>
						<th>Kelas</th>
						<th>Aksi</th>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><button type="submit" class="btn btn-primary">Lihat Nilai</button></td>
					</tr>
				</table>
			</div>
		</div>		
	</div>
</div>

<div style="width:200px; height:30px; margin-left:350px; margin-top:-15px;"></div>

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
