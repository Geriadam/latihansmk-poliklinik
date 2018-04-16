<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4 class="modal-title" id="myModalLabel">Detail Obat</h4>
    </div>
    <div class="modal-body">
    <?php
include "koneksi/koneksi.php";
 $pemeriksaan=$_GET['pemeriksaan'];
$sql=mysql_query("SELECT * from pemeriksaan where id_pemeriksaan='$pemeriksaan'");
while($a=mysql_fetch_array($sql)){
$coba=$a[7];
$array=explode(" ", $coba);
$id=$array[0];
$id1=$array[1];
$id2=$array[2];
$id3=$array[3];
$id4=$array[4];
$id5=$array[5];
$id6=$array[6];
$id7=$array[7];
$id8=$array[8];
$id9=$array[9];
$id10=$array[10];?>
<table cellspacing='1' cellpadding='3' width='100%' style='font-size: 12px;' class="table table-striped table-bordered table-hover" id="contoh">
<thead>
        <tr align='left'>
        <th width="15%">Nama Obat</th>
        <th width="10%">Jenis</th>
        <th width="10%">Harga Obat</th>
        <th width="10%">Jumlah</th>
        <th width="10%">Total Obat</th>
    </tr>
</thead>
<tbody>
<?php
include "koneksi/koneksi.php";
$pemeriksaan=$_GET['pemeriksaan'];
$mysql=mysql_query("SELECT DISTINCT A.id_pemeriksaan,A.tanggal,A.jam,B.id_obat,B.nama_obat,B.harga,B.jenis,A.jumlah from pemeriksaan A,obat B where A.id_obat=B.id_obat OR B.id_obat='$id' OR B.id_obat='$id1' OR B.id_obat='$id2' OR B.id_obat='$id3' OR B.id_obat='$id4' OR B.id_obat='$id5' OR B.id_obat='$id6' OR B.id_obat='$id7' OR B.id_obat='$id8' OR B.id_obat='$id9' OR B.id_obat='$id10' AND A.id_pemeriksaan = '$pemeriksaan' group by B.id_obat");
while($tampil=mysql_fetch_array($mysql)){?>
<tr align='left'>
        <td width="10%"><?php echo $tampil['nama_obat']; ?></td>
        <td width="10%"><?php echo $tampil[6]; ?></td>
        <td width="10%"><?php echo "Rp.".$tampil[5]; ?></td>
        <td width="10%"><?php echo $tampil[7]; ?></td>
        <td width="10%"><?php echo "Rp.".$tampil[5]*$tampil[7]; ?></td>
    <?php
}
?>
    </tr>
    <tr>
           <td colspan="2"></td>
           <td width="10%" colspan="2">Biaya Administrasi</td>
           <td width="10%">Rp.10000</td>
    </tr>
    <tr>
           <td colspan="3"></td>
           <td width="10%">Total</td>
           <td width="10%"><?php echo "Rp.".$a['total']; } ?></td>
    </tr>
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