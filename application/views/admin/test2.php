<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>script/css/admin.css">
<div class="container-fluid" onclick="test3()" onmousewheel="test3()" onmouseover="test3()">
<div class="col-md-10 offset-md-1" >
<div class="row" style="margin-bottom: 50px;">
		<h3>Daftar Murid</h3>
		<hr>
</div>
	<div class="row" style="background: white;padding-top: 20px;">
		<div class="col-md-12">
			<h4>Upload Pas Foto</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="background: white">
			<div class="table-responsive">
				<table class="table table-borderless">
					<?php echo form_open_multipart('admin/do_upload2');?>
						<tr>
							<input type="text" hidden value="<?php echo $nip ?>" name="nis">
							<td><input type="file" name="userfile" size="20" /></td>
						</tr>
						<tr>
							<td>Maksimum ukuran file : 100kb , Jenis file harus png</td>
						</tr>
						<tr>
							<td><input style="max-width: 100px" type="submit" value="upload" /></td>
						</tr>
				</table>
				</form>
			</div>
		</div>
	</div>
</div>
</div>