<form action="dokter-proses-tambah.php?tambah=1" method="post" role="form" enctype="multipart/form-data">
                <div class="form-group">
                	<div class="input-group">
                		<label>Nama</label>
  						<input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" required="required"/>
  					</div>
                </div>
                <div class="form-group">
                	<div class="input-group">
                		<label style="float: left;">Alamat  </label><br>
  						<textarea required="required" name="alamat" class="form-control" id="alamat" placeholder="Alamat" type="text" ></textarea>
  					</div>
                </div>
                <div class="form-group">
                <div class="input-group">
                <label style="float: left;">Tanggal Lahir  </label></br>
 <div class="input-group date form_date  col-lg-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
  <input name="tanggal" type="text" class="form-control" id="tanggal" style="float: left;" required="required" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                </div>
                <input type="hidden" id="dtp_input2" value="" />
            </div>
                <div class="form-group">
                	<div class="input-group">
                		<label>Telepon</label>
  						<input required="required" name="telp" type="text" class="form-control" id="telp" placeholder="Telepon"  maxlength="12" />
  					</div>
                </div>
                <div class="form-group">
                	<div class="input-group">
                		<label>Gambar</label>
  						<input accept="image/*" type="file" name="gambar" class="form-control" required />
  					</div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <label>Poliklinik</label>
              <select name="poli" class="form-control">
<?php
include "koneksi/koneksi.php";
$query = "SELECT * FROM poliklinik ORDER BY nama_poli";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array ($sql)) {
echo "<option value='$hasil[id_poli]'>$hasil[nama_poli]</option>";
}
?>
</select>
            </div>
                </div>
            
                <div class="form-group">
                	<input name="login" type="submit" class="btn btn-success" value="Tambah Data" />
                  <input type="reset" name="login" class="btn btn-primary" value="Reset" />
                  <button aria-hidden="true" data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
                </div>
            </form>