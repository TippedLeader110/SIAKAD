<div class="scrollable">
  <div class="row" >

</div>

<div class="row" style="margin-top: 5px;margin-bottom: 5px; ">
  <div class="col-md-12">
    <div class="container" style=" border-width: ; border-color: #d6d6c2; padding: 10px 10px 10px 10px; margin-top: -1px;">
      <h3><b>Pengumuman</b></h3>
   </div>
</div>
<div class="row">
  <div class="col-md-12">
    <?php 
    $d=0;
    foreach ($caro as $key => $v) {
    echo "<div class='row'>
          <div class='col-md-12'>
            <div class='container' style=' border-width: 1px; border-color: #d6d6c2; padding: 10px 10px 10px 10px; margin: 25px 10px 5px 25px; min-width: 920px
              <h3><a href='".base_url()."home/post/".$v->id."'><b>".$v->judul."</b></a></h3>
              <table width='300' border='0' >
              <tr>
              <td><h6>".$v->penulis."</h6></td>
              <td><h6>|</h6></td>
              <td><h6>".$v->waktu."</h6></td>
            </tr>
          </table>              
            </div>
          </div>
        </div>";
        $d++;
        if ($d==5) {
          break;
        }
    }
     ?>
    
</div>

</div>
