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
				<form method="post" action="logpro">
					<div class="container" style="border-color: transparent;background-color: #8DB3DA;border-radius: 15px;
					">
					<div class="row">
						<div class="container-fluid">
					<img src="<?php echo base_url()?>img/icon/icon-profil-guru.png" style="margin-top: -50px;max-width: 140px; max-height: 140px;">
						</div>
					</div>
					<div class="row" style="margin-bottom: 10px;">
						<div class="container-fluid">
								<h4 style="color: white;">Masuk Admin</h4>
								<?php if ($_SESSION['flash']=='no'): ?>
								<div class="alert alert-danger">
  									<strong>Terjadi Kesalahan!</strong>Username atau Password Salah.
								</div>
								<?php $_SESSION['flash']='';  ?>
								<?php endif ?>
								<?php if ($_SESSION['flash']=='ban'): ?>
								<div class="alert alert-warning">
  									<strong>Tidak dapat login !</strong> Akun anda telah dinonaktifkan oleh admin.
								</div>
								<?php $_SESSION['flash']='';  ?>
								<?php endif ?>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="container-fluid">											
								<h6 style="color:white; text-align: left;">&nbsp;&nbsp;Nama Pengguna</h6>
						</div>
					</div>
					<div class="row">
						<div class="container-fluid">
								<input style="width: 92%" type="text" name="username" placeholder="Nama Pengguna" checked>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="container-fluid">
								<h6 style="color:white; text-align: left;">&nbsp;&nbsp;Kata Sandi</h6>
						</div>
					</div>
					<div class="row">
						<div class="container-fluid">
								<input style="width: 92%" type="password" name="password" placeholder="Kata Sandi" id="myInput">
						</div>
					</div>
					<div class="row" style="margin-top: 5px; padding-left: 10px;" align="left" >
						<div class="container-fluid" style="color: white">
							<table border="0">
								<tr>
									<td>
										<input type="checkbox" onclick="myFunction()" style="width: 20px; height: 20px; margin-top: 5px;">
									</td>
									<td>
										<span style="margin-left: 5px;">Tampilkan Kata Sandi</span>
									</td>
								</tr>
							</table>
							
							
						</div>
					</div>
					<div class="row" style="margin-top: 30px; margin-bottom: 20px;">
						<div class="container-fluid">
								<button class="btn btn-primary shadow" type="submit" style="width: 150px; height: 40px;">Masuk</button>
						</div>
					</div>		
					</div>
					</form>		
					</div>
			</div>
		</div>
	</center>
</div>
