<?php
include "koneksi/koneksi.php";
if($_GET['edit']=='1'){
    $id=$_POST['id'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $tanggal=$_POST['tanggal'];
        $telp=$_POST['telp'];
        $jk=$_POST['jk'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $pass=md5($password);
        $masuk="Update pegawai set nama='$nama',alamat='$alamat',telp='$telp',tanggal='$tanggal',jk='$jk',username='$username',password='$pass' where id_pegawai='$id'";
        $mancep=mysql_query($masuk);
        if($mancep){
            //header('location: dokter.php');
            echo "<script language='javascript'>
	window.location='pegawai.php?message=success'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Data Gagal di simpan \n Mohon di chek kembali.');</script>";
        }
    }
	?>