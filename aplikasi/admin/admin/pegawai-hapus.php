<?php
include "koneksi/koneksi.php";
if($_GET['hapus']=='1'){
        $pegawai=$_GET['pegawai'];
        $guak=mysql_query("DELETE FROM pegawai WHERE id_pegawai='$pegawai'");
        if($guak){
            //header('location: buku.php');
            echo "<script language='javascript'>
	window.location='pegawai.php?hapus=sukses'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Buku Gagal di Hapus \n Mohon di chek kembali.');</script>";
        }
    }
	?>