
<div class="row">

</div>

<div class="row" style="margin-top: 5px;margin-bottom: 5px; ">
  <div class="col-md-12">
    <div class="container">
      <h4><b>Ubah Kata Sandi Anda</b></h4>
    </div>        
    <div class="container">
      <form method="" action="">
        <table border="1">
          <tr>
            <td>
              <!-- ini untuk WHERE-->
              <input type="text" name="" hidden>
            </td>
            <td>
              <h4>Kata Sandi Lama</h4>
            </td>
            <td>
              <input type="text" name="sandilama" placeholder="Kata Sandi Lama">
            </td>
            </tr>
            <tr>
              <td>
                  <input type="checkbox" onclick="myFunction()" style="width: 20px; height: 20px; margin-top: 5px;">              
              </td>
              <td>
                <h4>Tampilkan Password</h4>
              </td>
            </tr>
            <tr>
              <td>
                <h4>Kata Sandi Baru</h4>
              </td>
              <td>
                <input type="text" name="sandibaru1" placeholder="Kata Sandi Baru">
              </td>
            </tr>
            <tr>
              <td>
                  <input type="checkbox" onclick="myFunction()" style="width: 20px; height: 20px; margin-top: 5px;">              
              </td>
              <td>
                <h4>Tampilkan Password</h4>
              </td>
            </tr>
            <tr>
              <td>
                <h4>Konfirmasi Kata Sandi Baru</h4>
              </td>
              <td>
                <input type="text" name="sandibaru2" placeholder="Konfirmasi Kata Sandi Baru">
              </td>
            </tr>
            <tr>
              <td>
                  <input type="checkbox" onclick="myFunction()" style="width: 20px; height: 20px; margin-top: 5px;">              
              </td>
              <td>
                <h4>Tampilkan Password</h4>
              </td>
            </tr>
        </table>
        <div class="container-fluid">
          <div class="row"> 
            <div>
              <button type="submit" class="btn btn-primary" style="min-width: 200px;">Simpan</button>
            </div>
            <div>
              <button type="reset" class="btn btn-warning" style="min-width: 200px;">Reset Form</button>
            </div>
          </div>
          <div>
              <button type="submit" class="btn btn-danger" style="min-width: 200px;">Batal Ganti Password</button>
            </div>
        </div>
      </form>
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