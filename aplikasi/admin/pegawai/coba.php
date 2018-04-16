<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<?php
include "koneksi/koneksi.php";
$sql=mysql_query("SELECT * from pemeriksaan");
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
        <th width="5%">Id periksa</th>
        <th width="20%">Tanggal</th>
        <th width="15%">Jam</th>
        <th width="10%">Id Obat Periksa</th>
        <th width="15%">Id Obat Obat</th>
        <th width="5%">Nama Obat</th>
        <th width="10%">Pilihan</th>
    </tr>
</thead>
<tbody>
<?php
$mysql=mysql_query("SELECT A.id_pemeriksaan,A.tanggal,A.jam,A.id_obat,B.id_obat,B.nama_obat,B.harga from pemeriksaan A,obat B where A.id_obat='$id' OR A.id_obat='$id1' OR A.id_obat='$id2' OR A.id_obat=B.id_obat OR B.id_obat='$id' OR B.id_obat='$id1' OR B.id_obat='$id2'");
while($tampil=mysql_fetch_array($mysql)){?>
<tr align='left'>
        <td width="20%"><?php echo $tampil[0]; ?></td>
        <td width="15%"><?php echo $tampil[1]; ?></td>
        <td width="10%"><?php echo $tampil[2]; ?></td>
        <td width="15%"><?php echo $tampil[3]; ?></td>
        <td width="5%"><?php echo $tampil[4]; ?></td>
        <td width="10%"><?php echo $tampil['nama_obat']; ?></td>
        <td width="10%"><?php echo $tampil[6]; ?></td>
    </tr>
    <?php
}
}
?>