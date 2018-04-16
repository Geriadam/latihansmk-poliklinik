<?php
include "koneksi/koneksi.php";
if($_GET['tambah']=='1'){
        $nama=$_POST['nama'];
        $jenis=$_POST['jenis'];
        $harga=$_POST['harga'];
        $stok=$_POST['stok'];
        $masuk="INSERT into obat values ('','$nama','$jenis','$harga','$stok')";
        $mancep=mysql_query($masuk);
        if($mancep){
            echo "<script language='javascript'>
	window.location='obat.php?pesan=sukses'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Data Gagal di simpan \n Mohon di chek kembali.');</script>";
        }
    }
	?>