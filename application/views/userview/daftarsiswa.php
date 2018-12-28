<!DOCTYPE html>
<html>
<head>
<style>
h2 {
  text-align: center;
  color: #2F669F;
}
.dropbtn {
  background-color: #2F669F;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #8DB3DA;
}
</style>
</head>
<body>
<center>
<h2>Daftar Murid Per Angkatan</h2>
<p>Pilih Tahun Angkatan Siswa :</p>

<form action="<?php echo base_url() ?> Daftar/Siswa">
<div class="dropdown" style="padding-bottom: 2em">
  <button class="dropbtn">Tahun Angkatan</button>
  <div class="dropdown-content">
  <a href="<?php echo base_url()?>daftar/siswa/2016">2016</a>
  <a href="<?php echo base_url()?>daftar/siswa/2017">2017</a>
  <a href="<?php echo base_url()?>daftar/siswa/2018">2018</a>
  </div>
</div>
</center>
<table class="table table-bordered table-striped" style="text-align: center;">
            <tr></form>
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
            foreach ($muridtam as $key => $v) {
            $batas++;
            echo "<tr>
      <td></td><td>".$v->nis."</td>
      <td>".$v->nama."</td>
      <td>".$v->tahun."</td>
      <td>".$v->jurusan."</td>
      <td>".$v->kelas."</td>
      <td><form action='".base_url()."profil/tampilMurid' method='post'><button class='btn btn-primary' type='submit'>Lihat Profil<input type='text' name='nis' hidden value='".$v->nis."' ></form></button></td>
    </tr>";
            } ?>
          </table>
</body>
</html>
