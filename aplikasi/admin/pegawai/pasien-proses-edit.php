<?php
include "koneksi/koneksi.php";
if($_GET['edit']=='1'){
    $id=$_POST['id'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $tanggal=$_POST['tanggal'];
        $telp=$_POST['telp'];
        $jk=$_POST['jk'];
        $tanggal1=date('Y-m-d');
        $id_poli=$_POST['poli'];
        $masuk="Update pasien set nama='$nama',alamat='$alamat',tanggal_lahir='$tanggal',telp='$telp',jenis_kelamin='$jk', tanggal='$tanggal1',poliklinik='$id_poli' where id_pasien='$id'";
        $mancep=mysql_query($masuk);
        if($mancep){
            //header('location: dokter.php');
            echo "<script language='javascript'>
	window.location='pasien.php?message=success'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Data Gagal di simpan \n Mohon di chek kembali.');</script>";
        }
    }
	?>