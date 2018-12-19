
<div class="row">

</div>

<div class="row" style="margin-top: 5px;margin-bottom: 5px; ">
	<div class="col-md-10 offset-md-1">
		<div class="container" style=" border-width: 1px; border-color: #d6d6c2; padding: 10px 10px 10px 10px; margin-top: -1px;">
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://wallpapercave.com/wp/46IcIP8.jpg" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Judul Konten</h3>
        <p>Keterangan Konten</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://wallpapercave.com/wp/46IcIP8.jpg" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Judul Konten</h3>
        <p>Keterangan Konten</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://wallpapercave.com/wp/46IcIP8.jpg" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Judul Konten</h3>
        <p>Keterangan Konten</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<?php 
		$d=0;
		foreach ($caro as $key => $v) {
		echo "<div class='row'>
					<div class='col-md-12'>
						<div class='container' style=' border-width: 1px; border-color: #d6d6c2; padding: 10px 10px 10px 10px; margin: 25px 10px 5px 25px; min-width: 920px;'>
							<h5><a href='".$v->id."'>".$v->judul."</a></h5>	
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
