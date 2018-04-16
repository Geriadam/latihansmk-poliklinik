<?php
include "koneksi/koneksi.php";
if($_GET['tambah']=='1'){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $tanggal=$_POST['tanggal'];
        $telp=$_POST['telp'];
        $jk=$_POST['jk'];
        $id_poli=$_POST['poli'];
        $tanggal1=date('Y-m-d');
        $masuk="INSERT into pasien values ('','$nama','$alamat','$tanggal','$telp','$jk','$tanggal1',$id_poli)";
        $mancep=mysql_query($masuk);
        if($mancep){
            //header('location: dokter.php');
            echo "<script language='javascript'>
	window.location='pasien.php?pesan=sukses'
	</script>";
        }else{
            echo "<script type='text/javascript'>alert('Data Gagal di simpan \n Mohon di chek kembali.');</script>";
        }
    }
	?>