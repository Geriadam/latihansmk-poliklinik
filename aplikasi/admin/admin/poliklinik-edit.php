<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4 class="modal-title" id="myModalLabel">Edit Data Poliklinik</h4>
    </div>
    <div class="modal-body">
<form action="poliklinik-proses-edit.php?edit=1" method="post" role="form" enctype="multipart/form-data">
                <div class="form-group">
                	<div class="input-group">
                		<label>Nama Poliklinik</label>
                    <?php
                                            include "koneksi/koneksi.php";
                                             $poliklinik=$_GET['poliklinik'];
                                           $guak=mysql_query("select * FROM poliklinik WHERE id_poli='$poliklinik'");
                                            while($a=mysql_fetch_array($guak)){
?>
  						<input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" value="<?php echo $a[1]; ?>" />
              <input name="id" type="hidden" class="form-control" id="nama" placeholder="Nama" value="<?php echo $a[0]; ?>" />
  					</div>
                </div><?php } ?>
                <div class="form-group">
                	<input name="login" type="submit" class="btn btn-success" value="Edit Data" />
                  <input type="reset" name="login" class="btn btn-primary" value="Reset" />
                  <button aria-hidden="true" data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
                </div>
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