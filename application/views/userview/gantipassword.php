<div class="container" style="border-width:0px; background-color:#DCDDE1; padding-top: 10px; padding-bottom: 10px;">
	<div class="container" style="border-width:1px; background-color:#DCDDE1;padding-bottom: 100px">
		<div style="background-color:#DCDDE1; width:200px; height:30px; margin-left:350px; margin-top:-15px;">
			<h5>Ganti Password</h5>
		</div>
		<div class="row">
			<div class="col-md-12">
				<form>
					<div class="row">
						<table>
							<tr>
								<td>Password Lama</td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr>
								<td>Password Baru</td>
								<td><input type="password" name="password"></td>
							</tr>
						</table>
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
					<div class="row">
						<button type="submit" class="btn btn-primary">Ganti Password</button>
					</div>	
				</form>
			</div>
		</div>
	</div>
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