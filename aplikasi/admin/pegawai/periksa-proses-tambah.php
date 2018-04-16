<?php
include "koneksi/koneksi.php";
        $tanggal=date('Y-m-d');
        $jam=date('H:i:s');
        $id_periksa=$_POST['id-periksa'];
        $id_pasien=$_POST['id-pasien'];
        $id_poli=$_POST['id-poli'];
        $id_penyakit=$_POST['id-penyakit'];
        $id_dokter=$_POST['id-dokter'];
        $id_obat=$_POST['id-obat'];
        $jumlah=$_POST['jumlah'];
        $catatan=$_POST['catatan'];
if($id_dokter>'0'&&$id_penyakit>'0'){
$aku=implode(" ", $_POST['id-obat']);
$aku1=explode(" ", $aku);
// Ini Untuk Mengambil Id obat Nya
$id=$aku1[0];
$id1=$aku1[3];
$id2=$aku1[6];
$id3=$aku1[9];
$id4=$aku1[12];
$id5=$aku1[15];
$id6=$aku1[18];
$id7=$aku1[21];
$id8=$aku1[24];
$id9=$aku1[27];
$id10=$aku1[30];

// ini untuk mengambil stok obat
$stok=$aku1[2];
$stok1=$aku1[5];
$stok2=$aku1[8];
$stok3=$aku1[11];
$stok4=$aku1[14];
$stok5=$aku1[17];
$stok6=$aku1[20];
$stok7=$aku1[23];
$stok8=$aku1[26];
$stok9=$aku1[29];
$stok10=$aku1[32];

// Ini Untuk menjmlah harga obat
$harga=$aku1[1]+$aku1[4]+$aku1[7]+$aku1[10]+$aku1[13]+$aku1[16]+$aku1[19]+$aku1[22]+$aku1[25]+$aku1[28]+$aku1[31]+$aku1[34];
$total=$harga*$jumlah+10000;

//query insert pemeriksaan

$query_periksa="INSERT into pemeriksaan values ('$id_periksa','$tanggal','$jam','$id_pasien','$id_poli','$id_penyakit','$id_dokter','$id $id1 $id2 $id3 $id4 $id5 $i6 $id7 $id8 $id9 $id10','$jumlah','$harga','$total','$catatan')";

//query insert pembayaran

$bayar='0';
$kembalian='0';
$status="Pending";

$query_bayar="INSERT into pembayaran values('','$id_periksa','$total','$bayar','$kembalian','$jam','$tanggal','$status')";

//query update stok obat

$update=$stok-$jumlah;
$update1=$stok1-$jumlah;
$update2=$stok2-$jumlah;
$update3=$stok3-$jumlah;
$update4=$stok4-$jumlah;
$update5=$stok5-$jumlah;
$update6=$stok6-$jumlah;
$update7=$stok7-$jumlah;
$update8=$stok8-$jumlah;
$update9=$stok9-$jumlah;
$update10=$stok10-$jumlah;

$query_obat=mysql_query("UPDATE obat set stok=$update where id_obat = $id");
$query_obat1=mysql_query("UPDATE obat set stok=$update1 where id_obat = $id1");
$query_obat2=mysql_query("UPDATE obat set stok=$update2 where id_obat = $id2");
$query_obat3=mysql_query("UPDATE obat set stok=$update3 where id_obat = $id3");
$query_obat4=mysql_query("UPDATE obat set stok=$update4 where id_obat = $id4");
$query_obat5=mysql_query("UPDATE obat set stok=$update5 where id_obat = $id5");
$query_obat6=mysql_query("UPDATE obat set stok=$update6 where id_obat = $id6");
$query_obat7=mysql_query("UPDATE obat set stok=$update7 where id_obat = $id7");
$query_obat8=mysql_query("UPDATE obat set stok=$update8 where id_obat = $id8");
$query_obat9=mysql_query("UPDATE obat set stok=$update9 where id_obat = $id9");
$query_obat10=mysql_query("UPDATE obat set stok=$update10 where id_obat = $id10");

$query_pemeriksaan=mysql_query($query_periksa);
$query_pembayaran=mysql_query($query_bayar);
        if($query_pemeriksaan||$$query_pembayaran||$query_obat||$query_obat1||$query_obat2||$query_obat3||$query_obat4||$query_obat5||$query_obat6||$query_obat7||$query_obat8||$query_obat9||$query_obat10){?>


<script language='javascript'>window.location='pemeriksaan.php?pesan=sukses'</script>;

       <?php }else{
            echo "<script type='text/javascript'>alert('Data Gagal di simpan \n Mohon di chek kembali.');</script>";
        }}
else{
    echo "<script type='text/javascript'>alert('Harap Pilih Dokter Yang Bertugas \n Mohon di cek kembali.');</script>";
    echo "<script language='javascript'>window.location='pasien.php?periksa=sukses'</script>";
}
	?>}
