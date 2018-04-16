<?php
session_start();
error_reporting(0);
include_once 'koneksi/koneksi.php';

if(!isset($_SESSION['username']))
{
  echo "<script language='javascript'>
  window.location='404.php'
  </script>";
} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kwintasi Pembayaran Poliklinik Sehat Selalu</title>
</head>

<body>
    <?php
include "koneksi/koneksi.php";
 $pemeriksaan=$_GET['pemeriksaan'];
$sql=mysql_query("SELECT A.id_pemeriksaan,A.tanggal,A.jam,A.id_pasien,A.id_poli,A.id_penyakit,A.id_dokter,A.id_obat,A.jumlah,A.harga,A.total,A.catatan,B.nama,C.nama_poli,D.nama_penyakit,E.nama,B.alamat,F.id_pembayaran,F.jam from pemeriksaan A,pasien B,Poliklinik C,penyakit D,dokter E,pembayaran F where A.id_pasien=B.id_pasien AND A.id_poli = C.id_poli AND A.id_penyakit=D.id_penyakit AND A.id_dokter = E.id_dokter AND A.id_pemeriksaan=F.id_tindakan AND id_pemeriksaan='$pemeriksaan'");
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
<table width="1058" border="0">
  <tr>
    <td height="23" colspan="5"><strong><font face="Geometr706 BlkCn BT">POLIKLINIK SEHAT SELALU</font></strong></td>
  </tr>
  <tr>
    <td colspan="5">Jl. Jakarta No 1 Curahmalang Sumobito Jombang</td>
  </tr>
  <tr>
    <td colspan="5" align="center"><strong>
      <h2>KWINTASI</h2>
    </strong></td>
  </tr>
  <tr>
    <td height="83" colspan="5"><table width="1060" border="1" style="border-collapse: collapse;">
      <tr>
        <td width="108">Kwintasi</td>
        <td width="6">:</td>
        <td width="618"><?php echo $a[0]; ?></td>
        <td width="76">Poliklinik</td>
        <td width="9">:</td>
        <td width="203"><?php echo $a['nama_poli']; ?></td>
      </tr>
      <tr>
        <td>Nama Pasien</td>
        <td>:</td>
        <td><?php echo $a[12]; ?></td>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $a[16]; ?></td>
      </tr>
      <tr>
        <td>No Transaksi</td>
        <td>:</td>
        <td><?php echo $a[17]; ?></td>
        <td>Dokter</td>
        <td>:</td>
        <td><?php echo $a[15]; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="6" colspan="5"><hr size="4" color="#000000"></td>
  </tr>
  <tr>
    <td colspan="5">
    <table width="1061" border="1" style="border-collapse: collapse;">
      <tr>
        <th align="left" scope="col" colspan="2">Jenis Transaksi</th>
        <th width="117" align="left" scope="col">QTY</th>
        <th width="327" align="left" scope="col">Harga</th>
        <th width="312" align="left" scope="col">Total</th>
      </tr>
    </table></td>
  </tr>
  <?php
include "koneksi/koneksi.php";
$pemeriksaan=$_GET['pemeriksaan'];
$mysql=mysql_query("SELECT DISTINCT A.id_pemeriksaan,A.tanggal,A.jam,B.id_obat,B.nama_obat,B.harga,B.jenis,A.jumlah from pemeriksaan A,obat B where A.id_obat=B.id_obat OR B.id_obat='$id' OR B.id_obat='$id1' OR B.id_obat='$id2' OR B.id_obat='$id3' OR B.id_obat='$id4' OR B.id_obat='$id5' OR B.id_obat='$id6' OR B.id_obat='$id7' OR B.id_obat='$id8' OR B.id_obat='$id9' OR B.id_obat='$id10' AND A.id_pemeriksaan = '$pemeriksaan' group by B.id_obat");
while($tampil=mysql_fetch_array($mysql)){?>
  <tr>
    <td width="294"><?php echo "Pembelian ".$tampil['nama_obat']; ?></td>
    <td width="117"><?php echo $tampil[7].".0"; ?></td>
    <td width="330"><?php echo "Rp.".$tampil[5]; ?></td>
    <td width="308" colspan="2"><?php echo "Rp.".$tampil[5]*$tampil[7]; ?></td>
  </tr>
      <?php
}
?>
<tr>
    <td width="294"></td>
    <td width="117"></td>
    <td width="330">Biaya Administrasi</td>
    <td width="308" colspan="2">Rp.10000</td>
  </tr>
  <tr>
    <td colspan="5"><hr size="3" color="#000000"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><strong><font face="Geometr706 BlkCn BT">SubTotal</font></strong></td>
    <td colspan="2"><?php echo "Rp.".$a[10]; ?></td>
  </tr>
  <?php 
  $angka=$a[10];
  function Terbilang($x) {
    $ambil = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
    if ($x < 12)
        return " " . $ambil[$x];
    elseif ($x < 20)
        return Terbilang($x - 10) . " belas";
    elseif ($x < 100)
        return Terbilang($x / 10) . " puluh" . Terbilang($x % 10);
    elseif ($x < 200)
        return " seratus" . Terbilang($x - 100);
    elseif ($x < 1000)
        return Terbilang($x / 100) . " ratus" . Terbilang($x % 100);
    elseif ($x < 2000)
        return " seribu" . Terbilang($x - 1000);
    elseif ($x < 1000000)
        return Terbilang($x / 1000) . " ribu" . Terbilang($x % 1000);
    elseif ($x < 1000000000)
        return Terbilang($x / 1000000) . " juta" . Terbilang($x % 1000000);
}
  ?>
  <tr>
    <td colspan="5">Terbilang : 
     <?php echo "#".ucwords(Terbilang($angka))."Rupiah #"; ?>
</td>
  </tr>
  <tr>
    <td colspan="5">Jombang , <?php echo $a[1]; ?>/<?php echo $a[18]; ?></td>
  </tr>
  <tr>
    <td height="37" colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><font face="Geometr706 BlkCn BT">Admin</font></td>
    <td><font face="Geometr706 BlkCn BT"><?php echo $_SESSION['nama']; ?></font></td>
    <td colspan="2"><font face="Geometr706 BlkCn BT"><?php echo $a[15]; ?></font></td>
  </tr>
</table>
<form>
<input type="submit" value="-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------" onclick="window.print(); return false;">
</form>
</body>
</html><?php } ?>