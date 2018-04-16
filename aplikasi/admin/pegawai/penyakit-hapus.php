<?php
include "koneksi/koneksi.php";
if($_GET['hapus']=='1'){
        $penyakit=$_GET['penyakit'];
        $guak=mysql_query("DELETE FROM penyakit WHERE id_penyakit='$penyakit'");
        if($guak){
            //header('location: buku.php');
            echo "<script language='javascript'>
	window.location='penyakit.php'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Buku Gagal di Hapus \n Mohon di chek kembali.');</script>";
        }
    }
	?>