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
</head>
<body style="background-image: url('<?php echo base_url() ?>img/barik-biru-bg.png'); ">
	<?php $this->load->view('layout/navbar2') ?>
	<div class="row">
		<div class="col-md-2">
			<?php $this->load->view('admin/navbar') ?>
		</div>
		<div class="col-md-8" style="margin-top: 140px">
			<?php $this->load->view($page) ?>
		</div>
	</div>
</body>
<script type="text/javascript" src="<?php echo $base_url() ?>script/main.js"></script>
</html>