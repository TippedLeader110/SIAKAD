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
<h2>Daftar Siswa Per Angkatan</h2>
<p>Pilih Tahun Angkatan Siswa :</p>

<div class="dropdown">
  <button class="dropbtn">Tahun Angkatan</button>
  <div class="dropdown-content">
  <a href="#">2016</a>
  <a href="#">2017</a>
  <a href="#">2018</a>
  </div>
</div>
</center>
</body>
</html>
