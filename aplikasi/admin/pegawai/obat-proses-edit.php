<?php
include "koneksi/koneksi.php";
if($_GET['edit']=='1'){
    $id=$_POST['id'];
        $nama=$_POST['nama'];
        $jenis=$_POST['jenis'];
        $harga=$_POST['harga'];
        $stok=$_POST['stok'];
        $masuk="Update obat set nama_obat='$nama', jenis='$jenis', harga='$harga', stok='$stok' where id_obat='$id'";
        $mancep=mysql_query($masuk);
        if($mancep){
            echo "<script language='javascript'>
	window.location='obat.php?message=success'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Data Gagal di simpan \n Mohon di chek kembali.');</script>";
        }
    }
	?>