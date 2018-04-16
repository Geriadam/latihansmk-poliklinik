<?php
include "koneksi/koneksi.php";
if($_GET['edit']=='1'){
        $poli=$_POST['poli'];
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $masuk="Update penyakit set id_poli='$poli', nama_penyakit='$nama' where id_penyakit='$id'";
        $mancep=mysql_query($masuk);
        if($mancep){
            echo "<script language='javascript'>
	window.location='penyakit.php?message=success'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Data Gagal di simpan \n Mohon di chek kembali.');</script>";
        }
    }
	?>