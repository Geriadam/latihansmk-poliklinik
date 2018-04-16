<?php
include "koneksi/koneksi.php";
if($_GET['hapus']=='1'){
        $pembayaran=$_GET['pembayaran'];
        $tindakan=$_GET['tindakan'];
        $guak=mysql_query("DELETE FROM pembayaran WHERE id_pembayaran='$pembayaran'");
        $gua1k=mysql_query("DELETE FROM pemeriksaan WHERE id_pemeriksaan='$tindakan'");
        if($guak&&$gua1k){
            //header('location: buku.php');
            echo "<script language='javascript'>
	window.location='pembayaran.php?hapus=sukses'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Buku Gagal di Hapus \n Mohon di chek kembali.');</script>";
        }
    }
	?>