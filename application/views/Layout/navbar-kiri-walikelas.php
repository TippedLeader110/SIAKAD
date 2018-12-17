<!-- ini navbar-kiri-siswa-->
<div class="col-md-3 scrollable" style="background-color: #8DB3DA;margin-top: -22px;border-style: solid; height: auto;" >
      <div class="profile" align="center">
        <div class="circle">
          <img src="https://static.thenounproject.com/png/630729-200.png" style="max-width: 100px; max-height: 100px;">
        </div>
        <h4 align="center" style="margin-top: 20px; color: white;"><b>Selamat Datang,</b></h4>
        <div class="field-wel">
          <h4 align="center">
            <b><?php echo $_SESSION['user']; ?></b>
          </h4>
        </div>

        <div class="field-menu scrollable">
          <div class="row">
              <a href="http://localhost/SIAKAD/home/guru">
                 <div style="width: 200px; height: 33px; background: #ebebe0; margin-left: 50px; margin-top: 10px; margin-bottom: 5px; padding: 5px 5px 5px 20px;" class="row">
                <span class="kotak"></span>
                <span class="triangle"></span>
                <h5 style="color: black; text-align: left;" class=<?php echo $beranda?>>Beranda</h5>
               </div>
              </a>
              <a href="http://localhost/SIAKAD/Nilai/siswa">
                 <div style="width: 200px; height: 33px; background: #ebebe0; margin-left: 50px; margin-top: 10px; margin-bottom: 5px; padding: 5px 5px 5px 20px;" class="row">
                <span class="kotak"></span>
                <span class="triangle"></span>
                <h5 style="color: black; text-align: left;" class=<?php echo $nilai?>>Daftar Nilai</h5>
               </div>
              </a>
              <a href="http://localhost/SIAKAD/Nilai/walikelas">
                 <div style="width: 200px; height: 33px; background: #ebebe0; margin-left: 50px; margin-top: 10px; margin-bottom: 5px; padding: 5px 5px 5px 20px;" class="row">
                <span class="kotak"></span>
                <span class="triangle"></span>
                <h5 style="color: black; text-align: left;" class=<?php echo $rapot?>>Input Nilai</h5>
               </div>
              </a>
              <a href="http://localhost/SIAKAD/Absen/guru">
                 <div style="width: 200px; height: 33px; background: #ebebe0; margin-left: 50px; margin-top: 10px; margin-bottom: 5px; padding: 5px 5px 5px 20px;" class="row">
                <span class="kotak"></span>
                <span class="triangle"></span>
                <h5 style="color: black; text-align: left;" class=<?php echo $guru?>>Absensi Kelas</h5>
               </div>
              </a>
              <a href="http://localhost/SIAKAD/Daftar/siswa">
                 <div style="width: 200px; height: 33px; background: #ebebe0; margin-left: 50px; margin-top: 10px; margin-bottom: 5px; padding: 5px 5px 5px 20px;" class="row">
                <span class="kotak"></span>
                <span class="triangle"></span>
                <h5 style="color: black; text-align: left;" class=<?php echo $guru?>>Daftar Siswa</h5>
               </div>
              </a>
              <a href="http://localhost/SIAKAD/Daftar/guru">
                 <div style="width: 200px; height: 33px; background: #ebebe0; margin-left: 50px; margin-top: 10px; margin-bottom: 5px; padding: 5px 5px 5px 20px;" class="row">
                <span class="kotak"></span>
                <span class="triangle"></span>
                <h5 style="color: black; text-align: left;" class=<?php echo $guru?>>Daftar Guru</h5>
               </div>
              </a>
              <a href="http://localhost/SIAKAD/Profil/guru">
                 <div style="width: 200px; height: 33px; background: #ebebe0; margin-left: 50px; margin-top: 10px; margin-bottom: 5px; padding: 5px 5px 5px 20px;" class="row">
                <span class="kotak"></span>
                <span class="triangle"></span>
                <h5 style="color: black; text-align: left;" class=<?php echo $profil?>>Profil</h5>
               </div>
              </a>

          </div>
        </div>
      </div>
      
    </div>