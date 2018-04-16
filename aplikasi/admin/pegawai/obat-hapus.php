<?php
include "koneksi/koneksi.php";
if($_GET['hapus']=='1'){
        $obat=$_GET['obat'];
        $guak=mysql_query("DELETE FROM obat WHERE id_obat='$obat'");
        if($guak){
            //header('location: buku.php');
            echo "<script language='javascript'>
	window.location='obat.php?hapus=sukses'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Buku Gagal di Hapus \n Mohon di chek kembali.');</script>";
        }
    }
	?>