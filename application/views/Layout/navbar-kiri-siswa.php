<!-- ini navbar-kiri-siswa-->
<div class="col-md-3 scrollable" style="background-color: #8DB3DA;margin-top: -22px;border-style: solid; height: auto;" >
      <div class="profile" align="center">
        <div class="circle">
          <img src="<?php echo base_url(); ?>gambar/<?php echo $_SESSION['img']; ?>.png" style="max-width: 100px; max-height: 100px;">
        </div>
        <h4 align="center" style="margin-top: 20px; color: white;"><b>Selamat Datang,</b></h4>
        <div class="field-wel">
          <h4 align="center">
            <b><?php echo $_SESSION['user']; ?></b>
          </h4>
        </div>
        <!-- ini tulisan menu -->
        <div class="container" style="background-color: #2F669F; min-width: 280px; min-height: 35px; max-width: 280px; max-height: 35px; margin-bottom: -12px; border-width: 0px; padding: 5px 5px 5px 5px ;">
            <h5 style="color: white;">MENU</h5>
        </div>
        <!-- ini akhir tulisan menu -->

        <div class="field-menu scrollable link-menu">
          <div class="row">
              <a href="http://localhost/SIAKAD/home/siswa">
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
              <a href="http://localhost/SIAKAD/Nilai/raport">
                 <div style="width: 200px; height: 33px; background: #ebebe0; margin-left: 50px; margin-top: 10px; margin-bottom: 5px; padding: 5px 5px 5px 20px;" class="row">
                <span class="kotak"></span>
                <span class="triangle"></span>
                <h5 style="color: black; text-align: left;" class=<?php echo $rapot?>>Rapot</h5>
               </div>
              </a>
              <a href="http://localhost/SIAKAD/Absen/siswa">
                 <div style="width: 200px; height: 33px; background: #ebebe0; margin-left: 50px; margin-top: 10px; margin-bottom: 5px; padding: 5px 5px 5px 20px;" class="row">
                <span class="kotak"></span>
                <span class="triangle"></span>
                <h5 style="color: black; text-align: left;" class=<?php echo $absen?>>Rekap Absensi</h5>
               </div>
              </a>
              <a href="http://localhost/SIAKAD/Daftar/guru">
                 <div style="width: 200px; height: 33px; background: #ebebe0; margin-left: 50px; margin-top: 10px; margin-bottom: 5px; padding: 5px 5px 5px 20px;" class="row">
                <span class="kotak"></span>
                <span class="triangle"></span>
                <h5 style="color: black; text-align: left;" class=<?php echo $guru?>>Daftar Guru</h5>
               </div>
              </a>
              <a href="http://localhost/SIAKAD/Profil/siswa">
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