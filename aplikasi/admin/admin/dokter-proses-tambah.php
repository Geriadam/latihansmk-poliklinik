<?php
include "koneksi/koneksi.php";
if($_GET['tambah']=='1'){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $tanggal=$_POST['tanggal'];
        $telp=$_POST['telp'];
        $poli=$_POST['poli'];
        $gambar=$_FILES['gambar']['name'];
        $tipe_gambar=$_FILES['gambar']['type'];
        $folder="gambar/dokter/";
        if($tipe_gambar=="image/jpeg" || $tipe_gambar=="image/png"){
         move_uploaded_file($_FILES['gambar']['tmp_name'],$folder.$gambar);
        $masuk="INSERT into dokter values ('','$nama','$alamat','$tanggal','$telp','$gambar','$poli')";
        $mancep=mysql_query($masuk);
        if($mancep){
            //header('location: dokter.php');
            echo "<script language='javascript'>
	window.location='dokter.php?pesan=sukses'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Data Gagal di simpan \n Mohon di chek kembali.');</script>";
        }
    }
    }
	?>