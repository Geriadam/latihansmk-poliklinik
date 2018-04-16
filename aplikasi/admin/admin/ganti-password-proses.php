<?php
include "koneksi/koneksi.php";
session_start();
   $id=$_POST['id'];
   $plama=$_POST['pass_lama'];
   $pbaru=mysql_real_escape_string($_POST['pass_baru']);
   $pulang=mysql_real_escape_string($_POST['pass_ulang']);
   $select=  mysql_query("SELECT * FROM admin WHERE user='$id'");
   $data= mysql_fetch_array($select);
   $passwordlama=$data['pass'];
   if($_POST['ngirim']=='ya'){
       if($passwordlama==md5($plama)){
            if($pbaru==$pulang){
                $kunci=md5($pbaru);
                $suksess = mysql_query("UPDATE admin SET pass='$kunci' WHERE user='$id'");
                if($suksess){
                    echo '<script language="javascript">alert("Password Berhasil Di Ganti");
                    window.location="logout.php";</script>';
                    exit();
                }else{
                     echo '<script language="javascript">alert("Password Gagal Di Ganti");
                    window.location="index.php";</script>';
                    exit();
                }//endquery
            }//end cocok
            else{
               echo '<script language="javascript">alert("Ulangi Passwod Tidak Sesuai");
                    window.location="index.php?pesan=eror";</script>';
                    exit();
            }
       }
       else{
         echo '<script language="javascript">alert("Password Lama Salah !!");
                    window.location="index.php?pesan=eror";</script>';
                    exit();
       }
   }//endsubmit
?>
