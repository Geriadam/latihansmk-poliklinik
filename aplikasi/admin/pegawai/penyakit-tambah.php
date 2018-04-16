<form action="penyakit-proses-tambah.php?tambah=1" method="post" role="form" enctype="multipart/form-data">
 <div class="form-group">
                  <div class="input-group">
                    <label>Poliklinik</label>
              <select name="poli" class="form-control">
<?php
include "koneksi/koneksi.php";
$query = "SELECT id_poli, nama_poli FROM poliklinik ORDER BY nama_poli";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array ($sql)) {
echo "<option value='$hasil[id_poli]'>$hasil[nama_poli]</option>";
}
?>
</select>
            </div>
                </div>
                <div class="form-group">
                	<div class="input-group">
                		<label>Nama Penyakit</label>
  						<input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" />
  					</div>
                </div>
                <div class="form-group">
                	<input name="login" type="submit" class="btn btn-success" value="Tambah Data" />
                  <input type="reset" name="login" class="btn btn-primary" value="Reset" />
                  <button aria-hidden="true" data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
                </div>
            </form>