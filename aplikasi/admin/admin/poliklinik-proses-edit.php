<?php
include "koneksi/koneksi.php";
if($_GET['edit']=='1'){
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $masuk="Update poliklinik set nama_poli='$nama' where id_poli='$id'";
        $mancep=mysql_query($masuk);
        if($mancep){
            //header('location: dokter.php');
            echo "<script language='javascript'>
	window.location='poliklinik.php?message=success'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Data Gagal di simpan \n Mohon di chek kembali.');</script>";
        }
    }
	?>