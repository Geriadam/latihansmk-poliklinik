<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4 class="modal-title" id="myModalLabel">Edit Data Pegawai</h4>
    </div>
    <div class="modal-body">
<?php
                                            include "koneksi/koneksi.php";
                                             $pegawai=$_GET['pegawai'];
                                           $guak=mysql_query("select * FROM pegawai WHERE id_pegawai='$pegawai'");
                                            while($a=mysql_fetch_array($guak)){
                                            ?>
<p align="center"><img src="images/admin.png" width="150" height="150"></p>
<p align="left">Nama Dokter : <?php echo $a[1]; ?> </p>
<p align="left">Alamat : <?php echo $a[2]; ?> </p>
<p align="left">Tanggal Lahir : <?php echo $a[4]; ?> </p>
<p align="left">Nomor Telepon : <?php echo $a[3]; ?> </p>
<p align="left">Jenis Kelamin : <?php echo $a[5]; ?> </p>
<p align="left">Username : <?php echo $a[6]; ?> </p>
<p align="left">Password : <?php echo $a[7]; ?> </p>
 <p align="right"><button aria-hidden="true" data-dismiss="modal" type="submit" class="btn btn-danger" name="close">Close</button></p>
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