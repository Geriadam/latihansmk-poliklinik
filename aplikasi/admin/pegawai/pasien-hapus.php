<?php
include "koneksi/koneksi.php";
if($_GET['hapus']=='1'){
        $pasien=$_GET['pasien'];
        $guak=mysql_query("DELETE FROM pasien WHERE id_pasien='$pasien'");
        if($guak){
            //header('location: buku.php');
            echo "<script language='javascript'>
	window.location='pasien.php'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Buku Gagal di Hapus \n Mohon di chek kembali.');</script>";
        }
    }
	?>