<?php
include "koneksi/koneksi.php";
if($_GET['hapus']=='1'){
        $pemeriksaan=$_GET['pemeriksaan'];
        $guak=mysql_query("DELETE FROM pemeriksaan WHERE id_pemeriksaan='$pemeriksaan'");
        $guak1=mysql_query("DELETE FROM pembayaran WHERE id_tindakan='$pemeriksaan'");
        if($guak&&$guak1){
            //header('location: buku.php');
            echo "<script language='javascript'>
	window.location='pemeriksaan.php'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Buku Gagal di Hapus \n Mohon di chek kembali.');</script>";
        }
    }
	?>