<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4 class="modal-title" id="myModalLabel">Transaksi Pembayaran</h4>
    </div>
    <div class="modal-body">
<form action="pembayaran-proses-edit.php?edit=1" method="post" role="form">
<div class="form-group">
                  <div class="input-group">
                    <label>Total Harga</label>
                    <?php
                        include "koneksi/koneksi.php";
                        $pembayaran=$_GET['pembayaran'];
                        $guak=mysql_query("select * from pembayaran WHERE id_pembayaran = '$pembayaran'");
                        while($a=mysql_fetch_array($guak)){
                    ?>
              <input name="aku" type="text" class="form-control" required="required"  value="<?php echo "Rp.$a[2]"; ?>" disabled="disabled"/>
               <input name="total" type="hidden" class="form-control" id="total" required="required"  value="<?php echo "$a[2]"; ?>"/>
            </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <label>Bayar</label>
<?php
    $rego=$a[3];
    if($rego>0)
       {
          echo  '<input name="y" type="text" class="form-control" id="nama" placeholder="Bayar" disabled="disabled" required="required" value="Rp.'.$rego.'"';
          echo  '</div>';
          echo      '</div>';
           echo      '<div class="form-group">';
          echo        '<div class="input-group">';
          echo         ' <label>Status</label>';
		      echo '<a type="button" class="form-control btn btn-success"><span class="glyphicon glyphicon-credit-card"></span>      '.$a[7].'</a>';
          echo  '</div>';
          echo      '</div>';
       }
    else
      {
          echo  '<input autofocus name="bayar" type="text" class="form-control" id="nama" placeholder="Bayar" required="required" autofocus/>';
          echo  '<input name="id" type="hidden" class="form-control" id="nama" placeholder="Nama" required="required" value="'.$a[0].'" />';
          echo  '</div>';
          echo      '</div>';
          echo      '<div class="form-group">';
          echo        '<input name="login" type="submit" class="btn btn-success" value="Proses" />   ';
          echo        '<input type="reset" name="login" class="btn btn-primary" value="Reset" />   ';
          echo        '<button aria-hidden="true" data-dismiss="modal" class="btn btn-danger" type="button">Close</button>';
          echo      '</div>';
          echo  '</form>';
      }}
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