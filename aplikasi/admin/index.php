<?php
session_start();
if (isset ($_POST['login'])) {
error_reporting(0);
include "admin/koneksi/koneksi.php";
$user=$_POST['username'];
$password=$_POST['password'];
$tipe=$_POST['tipe'];
$pass=md5($password);
if($tipe=='Admin'){
$qry=mysql_query("SELECT * FROM admin WHERE user='$user' AND pass='$pass' AND tipe='$tipe'");
$jumpa=mysql_num_rows($qry);
if ($jumpa=='1') {
  $r=mysql_fetch_array($qry);
  $_SESSION['username']= $r['user'];
  $_SESSION['password']= $r['pass'];
  echo "<script language='javascript'>
  window.location='admin/index.php'
  </script>";
}
else {
  echo '<script language="javascript">
  alert("Username atau Password Yang anda Masukkan Salah atau Acount Sudah Diblokir");
  window.location="index.php";
  </script>';
  exit();
}}
else{
$qry=mysql_query("SELECT * FROM pegawai WHERE username='$user' AND password='$pass' AND tipe='$tipe'");
$jumpa=mysql_num_rows($qry);
if ($jumpa=='1') {
  $r=mysql_fetch_array($qry);
  $_SESSION['username']= $r['username'];
  $_SESSION['password']= $r['password'];
  $_SESSION['nama']= $r['nama'];
  $_SESSION['id']= $r['id_pegawai'];
  echo "<script language='javascript'>
  window.location='pegawai/index.php'
  </script>";
}
else {
  echo '<script language="javascript">
  alert("Username atau Password Yang anda Masukkan Salah atau Acount Sudah Diblokir");
  window.location="index.php";
  </script>';
  exit();
}}
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="admin/img/favicon.png">

    <title>Halaman Administrator</title>

    <!-- Bootstrap CSS -->    
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="admin/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="admin/css/style.css" rel="stylesheet">
    <link href="admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" action="" method="post">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="Username" autofocus name="username">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <div class="input-group">
                <select name="tipe" class="form-control">
                <option>--------------[ Pilih Tipe Admin ]--------------</option>
                	<option value="Admin">Pemilik</option>
                	<option value="Pegawai">Pegawai</option>
                </select>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
             <button class="btn btn-danger btn-lg btn-block" type="reset">Reset</button>
        </div>
      </form>

    </div>


  </body>
</html>