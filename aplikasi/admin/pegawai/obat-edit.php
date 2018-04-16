<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4 class="modal-title" id="myModalLabel">Edit Data Obat</h4>
    </div>
    <div class="modal-body">
<form action="obat-proses-edit.php?edit=1" method="post" role="form" enctype="multipart/form-data">
                <div class="form-group">
                	<div class="input-group">
                		<label>Nama Obat</label>
 <?php
                                            include "koneksi/koneksi.php";
                                             $obat=$_GET['obat'];
                                           $guak=mysql_query("select * FROM obat WHERE id_obat='$obat'");
                                            while($a=mysql_fetch_array($guak)){
?>
  						<input name="nama" required="required" type="text" class="form-control" id="nama" placeholder="Nama" value="<?php echo $a[1]; ?>" />
              <input name="id" type="hidden" value="<?php echo $a[0]; ?>" />
  					</div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <label>Jenis</label>
              <select name="jenis" class="form-control">
              <option value="Pil">Pil</option>
              <option value="Kapsul">Kapsul</option>
              <option value="Tablet">Tablet</option>
              <option value="Sirup">Sirup</option>
              <option value="Puyer">Puyer</option>
              </select>
            </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <label>Harga</label>
              <input name="harga" required="required" type="text" class="form-control" id="Harga" placeholder="Harga"  value="<?php echo $a[3]; ?>" />
            </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <label>Stok</label>
              <input name="stok" required="required" type="text" maxlength="3" class="form-control" id="Stok" placeholder="Stok" size="1" value="<?php echo $a[4]; ?>" />
            </div>
                </div>
                <div class="form-group">
                	<input name="login" type="submit" class="btn btn-success" value="Edit Data" />
                  <input type="reset" name="login" class="btn btn-primary" value="Reset" />
                  <button aria-hidden="true" data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
                </div>
            </form>
            <?php
}
            ?>
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