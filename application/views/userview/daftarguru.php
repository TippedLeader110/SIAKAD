<div class="container" style="border-width: 1px;">
<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <center>
      <table style="margin-top:10px; margin-bottom: 20px;border-width: 0px; color:#2F669F; font-size: 18px; ">
  
        <tr>
          <td>
           Ketikkan Nama Guru Yang Ingin Anda Cari 
          </td>
        </tr>
        <tr>
          <td>
             <form method="post">
              <input  class="form-control" style="max-width: 200px;" placeholder="Cari Nama Guru..." type="text" name="cari" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" name="cari">&nbsp;
            </form>
          </td>
          <?php 
            if (isset($_POST['cari'])) {
            if ($_POST['cari']=='') {
              $_POST['cari']=2;
              $s=$_POST['cari'];
            redirect("daftar/guru/",location);
            }
            else{
              $s=$_POST['cari'];
            redirect("daftar/guru/$s/nama",location);
            }

          }
           ?>
        </tr>

      </table>
      </center>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</div>

<div class="row">
  <div class="col-md-12"> 
    <div class="container" style="border-width: 1px; color:#2F669F; font-size: 20px;">
        <b>Guru yang mungkin anda cari :</b>
      <div class="row">
        
      </div>
      <!-- ini kotak konten 
    <div class="col-md-3">
    <div class="container" style="background-color:#DCDDE1; border-width: 0px; font-weight: 500; ">
      <div class="circle"style="margin: 10px 10px 50px 60px; margin-top: 30px;">
        <img src="https://static.thenounproject.com/png/630729-200.png" style="max-width: 100px; max-height: 100px;">
      </div>
        <div class="container" style="width: 150px; background-color:#2F669F; border-width: 0px; color:white; padding: 3px 3px 3px 3px;">
        <center>Ubah Foto</center>
      </div>
    </div>
  </div>
-->
<div class="row">
  <div class="col-md-12" style="margin-bottom: 50px;">

    <div class="row">
        



<?php 
$max = 0;
foreach ($gurudaf as $key => $v) {
echo"          <div class='col-md-3'>";
echo"          <div class='card' style='width: 200px; height:320px; background-color: #DCDDE1; margin-top:  30px;'>";
echo"          <div style='background-color:#009432; height: 200px; width: 200px;'>";
echo"          <div class='circle' style='margin: 10px 10px 50px 50px; margin-top: 30px;'>";
echo"             <img src='<?php echo base_url()?>img/icon/icon-profil-guru.png' style='max-width: 100px; max-height: 100px;'>";
echo"          </div>";
echo"      <div class='card-body'>";
echo"          <h6 class='card-title' align='center'>".$v->nama."</h6>";
echo"          <p class='card-text' align='center' style='font-size: 15px;'>".$v->mapel."</p>";
echo"          <center>";
echo"            <a href='#' class='btn btn-primary'><h6>Lihat Profil</h6></a>";
echo"          </center>";
echo"      </div>";
echo"    </div>";
echo"  </div>";
echo"</div>";
  if ($max==4) {
    break;
  }
}
 ?>
   
</div>
</div>
</div>