<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh3IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/script/css/lel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/script/css/style.css">
	<title>Siakad</title>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 80%;
  }
  .aktif{
  	font-weight: 900;
  }
  a, a:hover{
  	color: black;
  	font-weight: bold;
  }
  </style>
</head>
<body>
	<div class="row">
		<div class="col-md-12" style="margin-top: -30px;">
			<?php include 'navbar.php'; ?>
		</div>
	</div>
	<div class="container-fluid" style="overflow-y: auto; height: auto;">
	<div class="row" style="margin-top: 20px; ">
		<?php $this->load->view($nav) ?>
		<!-- <div class="col-md-3">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		</div> -->
		<div class="col-md-9">
			<div class="row">
				<div class="container" style="margin: -10px 10px 10px 10px; border-width: 1px; border-color: #d6d6c2; margin-top: -15px;  box-shadow: 0.5px 0.5px 0.5px 0.5px grey;">
					<div class="row" style="padding: 5px 5px 5px 5px">
						<span style="background-color: #2F669F; height: 25px; width: 15px; margin-top: 7px; margin-left: 5px;"></span>
						<span style="background-color: #2F669F; height: 25px; width: 5px; margin-top: 7px; margin-left: 5px;"></span> &nbsp;&nbsp;

						<h3 style="color: #2F669F;"><b></b><?php echo $nama ?></h3>	
					</div>
					
				</div>
				<div class="container" style="border-width: 1px; border-color: #d6d6c2;margin: 0px 10px 10px 10px; box-shadow: 0.2px 0.2px 0.2px 0.2px grey; ">
				<div style=" overflow-x: hidden; height: 480px; ">
					<?php $this->load->view($page) ?>
				</div>
			</div>
			</div>
			
		</div>
	</div>
	</div>
</body>
<script type="text/javascript" src="<?php echo $base_url() ?>script/main.js"></script>
<script type="text/javascript">
	$('.carousel').carousel({
  interval: 2000
})
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
	$('#example').tooltip(options)
</script>
</html>