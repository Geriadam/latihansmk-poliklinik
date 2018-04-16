<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4 class="modal-title" id="myModalLabel">Edit Data Dokter</h4>
    </div>
    <div class="modal-body">
<form action="dokter-proses-edit.php?edit=1" method="post" role="form" enctype="multipart/form-data">
                <div class="form-group">
                	<div class="input-group">
                		<label>Nama</label>
                    <?php
                                            include "koneksi/koneksi.php";
                                             $dokter=$_GET['dokter'];
$guak=mysql_query("SELECT A.id_dokter,A.nama,A.alamat,A.tanggal,A.telp,A.gambar,A.poliklinik,B.nama_poli,B.id_poli FROM dokter A,poliklinik B where A.poliklinik=B.id_poli AND id_dokter='$dokter' order by A.nama ASC");
                                            while($a=mysql_fetch_array($guak)){
?>
  						<input required="required" name="nama" type="text" class="form-control" id="nama" placeholder="Nama" value="<?php echo $a[1]; ?>" />
              <input name="id" type="hidden" class="form-control" id="nama" placeholder="Nama" value="<?php echo $a[0]; ?>" />
  					</div>
                </div>
                <div class="form-group">
                	<div class="input-group">
                		<label style="float: left;">Alamat  </label><br>
  						<textarea required="required" name="alamat" class="form-control" id="alamat" placeholder="Alamat" type="text" ><?php echo $a[2]; ?></textarea>
  					</div>
                </div>
                <div class="form-group">
                <div class="input-group">
                <label style="float: left;">Tanggal Lahir  </label></br>
             <div class="input-group date form_date  col-lg-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input3" data-link-format="yyyy-mm-dd">
                    <input name="tanggal" type="text" value="<?php echo $a[3]; ?>" class="form-control" id="tanggal" style="float: left;" required="required" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                </div>
                <input type="hidden" id="dtp_input3" value="" />
            </div>
                <div class="form-group">
                	<div class="input-group">
                		<label>Telepon</label>
  						<input name="telp" type="text" maxlength="12" class="form-control" id="telp" required="required" placeholder="Telepon" value="<?php echo $a[4]; ?>" />
  					</div>
                </div>
                <div class="form-group">
                	<div class="input-group">
                		<label>Gambar</label>
  						<input type="file" name="gambar" class="form-control" required />
  					</div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <label>Poliklinik</label>
              <select name="poli" class="form-control">
              <option  value="<?php echo $a[8]; ?>"><?php echo $a[7]; ?></option>
<?php
include "koneksi/koneksi.php";
$query = "SELECT * FROM poliklinik ORDER BY nama_poli";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array ($sql)) {
echo "<option value='$hasil[id_poli]'>$hasil[nama_poli]</option>";
}}
?>
</select>
            </div>
                </div>
            
                <div class="form-group">
                	<input name="login" type="submit" class="btn btn-success" value="Edit Data" />
                  <input type="reset" name="login" class="btn btn-primary" value="Reset" />
                  <button aria-hidden="true" data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
                </div>
<script type="text/javascript">
    $('.form_date').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>
            </form>
             <script>
    /* center modal */
    function centerModals(){
      $('.modal').each(function(i){
      var $clone = $(this).clone().css('display', 'block').appendTo('body');
      var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
      top = top > 0 ? top : 0;
      $clone.remove();
      $(this).find('.modal-content').css("margin-top", top);
      });
    }
    $('.modal').on('show.bs.modal', centerModals);
    $(window).on('resize', centerModals);
  </script>