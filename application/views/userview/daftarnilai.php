<div class="row" style="margin-top: 20px;">
	<div class="container" style="border-width: 0px; margin-left: 210px; max-width: 600px;">
		<div class="row">
			<div>
			<table width="200" border="0" style="padding: 5px 5px 5px 5px; margin-right: 30px; margin-left: 25px;">
			<br><tr>	
				<td style="padding: 5px 5px 5px 5px; min-width: 50px;">  
					<h3><b>NIS</b></h3>
				</td>
				<td style="padding-left: 20px;">
					<h5 align="center"><?php echo $_SESSION['nis'] ?></h5>		
				</td>
			</tr>
			</table>	
			</div>
			<div>
			<table width="200" border="0" style="padding: 5px 5px 5px 5px; ">
			<br><tr>
				<td style="padding: 5px 5px 5px 5px;">
					<h3><b>Nama</b></h3>
				</td>
				<td style="padding: 5px 5px 5px 5px;  min-width: 250px;">
					<h5 align="center"><?php echo $_SESSION['user'] ?></h5>
				</td>				
			</tr>
			</table>
		</div>
		</div>
	</div>
</div>
<div class="row" style="margin-top: 50px; margin-left: 60px;" >
	<a href="<?php base_url() ?>uas" style="">
		<div style="margin-left: 150px; margin-top: 20px;">
		<div style="background-color: #b3ffb3; width: 160px; height: 160px;">
			<img src="<?php echo base_url()?>img\icon\daftatrnilai-icons\uas.jpg">
		</div>
		<div style="background:#d6f5d6; height: 60px;  padding-top: 10px; width: 162px;">
			<h6 align="center">Nilai Ujian <br>Semester</h6>
		</div>
	</div>
	</a>
	<a href="<?php base_url() ?>uts">
		<div style="margin-left: 30px; margin-top: 20px;">
		<div style="background-color: #8080ff; width: 160px; height: 160px;">
				<img src="<?php echo base_url()?>img\icon\daftatrnilai-icons\uts.jpg">
		</div>
		<div style="background:#adc2eb; height: 60px; padding-top: 20px; width: 167px;">
			<h6 align="center">Nilai UTS</h6>
		</div>
	</div>
	</a>
	<a href="<?php base_url() ?>tugas">
		<div style="margin-left: 30px; margin-top: 20px;">
		<div style="background-color: #ffcc80; width: 160px; height: 160px;">
			<img src="<?php echo base_url()?>img\icon\daftatrnilai-icons\tugas.jpg">
		</div>
		<div style="background:#ffe0b3; height: 60px; padding-top: 20px;  width: 167px;">
			<h6 align="center">Nilai Tugas</h6>
		</div>
	</div>
	</a>
</div>