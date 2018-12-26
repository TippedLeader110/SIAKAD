<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>script/css/admin.css">
<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
	<div class="container" style="background-color: white; border-width: 1px; border-color: #b8b894; padding: 15px 15px 10px 10px; box-shadow: 0.5px 0.5px 0.5px 0.5px grey;">
		<h3 style="color: #2F669F;"><b>Post Artikel</b></h3>
	</div>
</div>
<div class="container" style="border-width: 1px; border-color: #b8b894; background-color: white; padding: 15px 15px 10px 10px; box-shadow: 0.5px 0.5px 0.5px 0.5px grey; margin-top: 20px;">
	<div class="row" style="background: white;padding-top: 20px;">
		<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
		<div class="col-md-12">
			<h4>Pembuat Artikel </h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="background: white">
			<div class="table-responsive">
				<form method="post" action="<?php echo base_url() ?>admin/simpanPOST">
				<table class="table table-borderless">
					<tr>
						<th><h4>Judul Artikel</h4></th>
					</tr>
					<tr><input type="text" hidden name="penulis" value="<?php echo $_SESSION['admin'] ?>">
						<td><input type="text" name="judul"></td><input type="text" hidden value="<?php echo date("Y/m/d") ?>" name="waktu">
					</tr>
					<tr>
						<td>
							<textarea name="editor1" style="height: 500px;"></textarea>
		<script>
			CKEDITOR.replace( 'editor1' );
		</script>
						</td>
					</tr>
					<tr>
						<td><button class="btn btn-primary" type="submit" name="simpan">Simpan</button></td><td colspan="3"><button class="btn btn-alert" type="reset">Ulangi</button></td>
					</tr>
				</table>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</div>