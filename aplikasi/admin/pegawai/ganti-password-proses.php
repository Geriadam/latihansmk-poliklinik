<?php
include "koneksi/koneksi.php";
session_start();
   $id=$_POST['id'];
   $plama=$_POST['pass_lama'];
   $pbaru=mysql_real_escape_string($_POST['pass_baru']);
   $pulang=mysql_real_escape_string($_POST['pass_ulang']);
   $select=  mysql_query("SELECT * FROM pegawai WHERE id_pegawai='$id'");
   $data= mysql_fetch_array($select);
   $passwordlama=$data['password'];
   if($_POST['ngirim']=='ya'){
       if($passwordlama==md5($plama)){
            if($pbaru==$pulang){
                $kunci=md5($pbaru);
                $suksess = mysql_query("UPDATE pegawai SET password='$kunci' WHERE id_pegawai='$id'");
                if($suksess){
                    echo '<script language="javascript">alert("Password Berhasil Di Ganti");
                    window.location="logout.php";</script>';
                    exit();
                }else{
                     echo '<script language="javascript">alert("Password Gagal Di Ganti");
                    window.location="home.php";</script>';
                    exit();
                }//endquery
            }//end cocok
            else{
               echo '<script language="javascript">alert("Ulangi Passwod Tidak Sesuai");
                    window.location="home.php?pesan=eror";</script>';
                    exit();
            }
       }
       else{
         echo '<script language="javascript">alert("Password Lama Salah !!");
                    window.location="home.php?pesan=eror";</script>';
                    exit();
       }
   }//endsubmit
?>
