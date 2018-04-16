<?php
include "koneksi/koneksi.php";
if($_GET['edit']=='1'){
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $tanggal=$_POST['tanggal'];
        $telp=$_POST['telp'];
        $poli=$_POST['poli'];
        $gambar=$_FILES['gambar']['name'];
        $folder="gambar/dokter/";
         move_uploaded_file($_FILES['gambar']['tmp_name'],$folder.$gambar);
        $masuk="Update dokter set nama='$nama', alamat='$alamat', tanggal='$tanggal', telp='$telp', gambar='$gambar', poliklinik='$poli' where id_dokter='$id'";
        $mancep=mysql_query($masuk);
        if($mancep){
            //header('location: dokter.php');
            echo "<script language='javascript'>
	window.location='dokter.php?message=success'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Data Gagal di simpan \n Mohon di chek kembali.');</script>";
        }
    }
	?>