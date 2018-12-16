<style type="text/css">h5{
	color: white;
	}h4{
	color: white;
	}input {
  border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 1px solid black;
	}</style>
<div class="col-md-12">
	<center>
		<div class="row" style="margin-top: 80px;height: 500px;">
			<div class="col-md-5 offset-md-3" style="padding-left: 100px;">
				
					<div class="container" style="border-color: transparent;background-color: #8DB3DA;border-radius: 15px;
					">
					<div class="row">
						<div class="container-fluid">
					<img src="<?php echo base_url()?>img/icon/icon-profil-guru.png" style="margin-top: -50px;max-width: 140px; max-height: 140px;">
						</div>
					</div>
					<div class="row">
						<div class="container-fluid">
								<h4>Masuk Guru/Pegawai</h4>
						</div>
					</div>
					<div class="row" style="margin-top: 5px;">
						<div class="container-fluid">											
								<h5 style="text-align: left;">&nbsp;&nbsp;Nama Pengguna</h5>
						</div>
					</div>
					<div class="row">
						<div class="container-fluid">
								<input style="width: 92%" type="text" name="" placeholder="">
						</div>
					</div>
					<div class="row">
						<div class="container-fluid">
								<h5 style="text-align: left;">&nbsp;&nbsp;Kata Sandi</h5>
						</div>
					</div>
					<div class="row">
						<div class="container-fluid">
								<input style="width: 92%" type="Password" name="" placeholder="" id="myInput">
						</div>
					</div>
					<div class="row" style="margin-top: 5px;">
						<div class="container-fluid" style="color: white">
							<input type="checkbox" onclick="myFunction()">Tampilkan Kata Sandi
						</div>
					</div>
					<div class="row" style="margin-top: 50px;">
						<div class="container-fluid">
								<button class="more" type="submit" style="background: #32669B;padding-left: 30px;padding-right: 30px;border-color: transparent;border-radius: 20px;">Masuk</button>
						</div>
					</div>
					<div class="row">
						<div class="container-fluid">
								Lupa Kata Sandi ?
							
						</div>
					</div>		
							
							
					</div>
			</div>
		</div>
	</center>
</div>
<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>