<?php
include "koneksi/koneksi.php";
if($_GET['tambah']=='1'){
        $nama=$_POST['nama'];
        $masuk="INSERT into poliklinik values ('','$nama')";
        $mancep=mysql_query($masuk);
        if($mancep){
            //header('location: dokter.php');
            echo "<script language='javascript'>
	window.location='poliklinik.php?pesan=sukses'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Data Gagal di simpan \n Mohon di chek kembali.');</script>";
        }
    }
	?>