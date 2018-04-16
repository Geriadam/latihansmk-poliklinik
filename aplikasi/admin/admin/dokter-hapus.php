<?php
include "koneksi/koneksi.php";
if($_GET['hapus']=='1'){
        $dokter=$_GET['dokter'];
        $guak=mysql_query("DELETE FROM dokter WHERE id_dokter='$dokter'");
        if($guak){
            //header('location: buku.php');
            echo "<script language='javascript'>
	window.location='dokter.php?hapus=sukses'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Buku Gagal di Hapus \n Mohon di chek kembali.');</script>";
        }
    }
	?>