<?php
include "koneksi/koneksi.php";
if($_GET['tambah']=='1'){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $tanggal=$_POST['tanggal'];
        $telp=$_POST['telp'];
        $jk=$_POST['jk'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $pass=md5($password);
        $masuk="INSERT into pegawai values ('','$nama','$alamat','$telp','$tanggal','$jk','$username','$pass','Pegawai')";
        $mancep=mysql_query($masuk);
        if($mancep){
            //header('location: dokter.php');
            echo "<script language='javascript'>
	window.location='pegawai.php?pesan=sukses'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Data Gagal di simpan \n Mohon di chek kembali.');</script>";
        }
    }
	?>