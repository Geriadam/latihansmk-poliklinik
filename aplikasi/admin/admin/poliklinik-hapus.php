<?php
include "koneksi/koneksi.php";
if($_GET['hapus']=='1'){
        $poliklinik=$_GET['poliklinik'];
        $guak=mysql_query("DELETE FROM poliklinik WHERE id_poli='$poliklinik'");
        if($guak){
            //header('location: buku.php');
            echo "<script language='javascript'>
	window.location='poliklinik.php?hapus=sukses'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Buku Gagal di Hapus \n Mohon di chek kembali.');</script>";
        }
    }
	?>