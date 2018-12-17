<div id="navbar" style="margin-top:">
<nav class="navbar navbar-expand navbar-dark navbar-toggleable-sm py-3" style="background-color: #2F669F;border-style: solid;border-color: black;border-width: 2px;">
   <a class="navbar-brand" href="#">
    <table><tr><td rowspan="2"><img src="<?php echo base_url() ?>img/icon/logohead.png" width="80" height="80" class="d-inline-block align-top" alt=""></td><td>Sistem Informasi Akademik</td></tr><tr><th><h4><b style="color: white">SIAKAD</b></h4></th></tr></table>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav navbar-right mr-auto"><!-- 
      <li class="nav-item active">
        <a class="nav-link " href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
      <form class="form-inline my-2 my-lg-0" action="<?php echo base_url() ?>home/logout">
    <?php 
    if ($_SESSION['user']!='') {
      echo "<button type='submit' class='btn btn-default'>
        <span><img src='".base_url()."img\icon\logout.png' style='width:25px; height: 25px;'></span><b>Keluar</b>
      </button>";
    }
     ?>
    </form>
  </div>
</nav>
</div>