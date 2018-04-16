<?php
session_start();
include "koneksi/koneksi.php";
    if($_GET['edit']=='1'){
        $id=$_POST['id'];
        $bayar=$_POST['bayar'];
        $total=$_POST['total'];
        $tanggal=date('Y-m-d');
        $jam=date('H:i:s');
        $kembalian=$bayar-$total;
        $masuk="Update pembayaran set bayar='$bayar', kembalian='$kembalian',jam='$jam',tanggal='$tanggal', status='Sudah Bayar' where id_pembayaran='$id'";
        $mancep=mysql_query($masuk);
        if($mancep){
            //header('location: dokter.php');
            echo "<script language='javascript'>
	window.location='pembayaran.php?message=success'
	</script>";
        }else{
            echo "<script language='javascript'>alert('Data Gagal di simpan \n Mohon di chek kembali.');</script>";
        }
    }
?>