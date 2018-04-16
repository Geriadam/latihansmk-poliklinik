<?php
session_start();
error_reporting(0);
include_once 'koneksi/koneksi.php';

if(!isset($_SESSION['username']))
{
  echo "<script language='javascript'>
  window.location='404.php'
  </script>";
}
$res=mysql_query("SELECT * FROM admin WHERE password='$pass'");
$a=mysql_fetch_array($res);
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Beranda Administrator | Poliklinik</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet"> 
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
  <?php
  include "include/menu.php";
   include "include/sidebar.php";
  ?>  
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
              <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Beranda</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Beranda</li>                          
                    </ol>
                </div>
            </div>
              
            <div class="row">
            <a href="pasien.php">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box blue-bg">
                        <i class="fa fa-user"></i>
                         <?php 
                             include "koneksi/koneksi.php";
                             $query=mysql_query("SELECT * from pasien ");
                             $a=mysql_num_rows($query);
                         ?>
                        <div class="count"><?php echo $a; ?></div>
                        <div class="title">Pasien</div>                       
                    </div><!--/.info-box-->         
                </div><!--/.col-->
             </a>   
             <a href="obat.php">   
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box brown-bg">
                        <i class="fa fa-heart"></i>
                         <?php 
                                include "koneksi/koneksi.php";
                                $query=mysql_query("SELECT * from obat ");
                                $a=mysql_num_rows($query);
                         ?>
                        <div class="count"><?php echo $a; ?></div>
                        <div class="title">Obat</div>                      
                    </div><!--/.info-box-->         
                </div><!--/.col-->  
            </a>   
             <a href="pemeriksaan.php">      
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box dark-bg">
                        <i class="fa fa-database"></i>
                        <?php 
                                include "koneksi/koneksi.php";
                                $query=mysql_query("SELECT * from pemeriksaan ");
                                $a=mysql_num_rows($query);
                         ?>
                        <div class="count"><?php echo $a; ?></div>
                        <div class="title">Pemeriksaan</div>                      
                    </div><!--/.info-box-->         
                </div><!--/.col-->
            </a>   
             <a href="pembayaran.php">    
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box green-bg">
                        <i class="fa fa-money"></i>
                        <?php 
                                include "koneksi/koneksi.php";
                                $query=mysql_query("SELECT * from pembayaran ");
                                $a=mysql_num_rows($query);
                         ?>
                        <div class="count"><?php echo $a; ?></div>
                        <div class="title">Pembayaran</div>                      
                    </div><!--/.info-box-->         
                </div><!--/.col-->
             </a>   
            </div><!--/.row-->
<div class="row">
<div class="col-md-3 col-sm-4">
                <div class="panel panel-default text-center">
                <div class="panel-heading" style="background-color: #337ab7; color: #fff">
                Hari Ini
                </div>
                    <div class="panel-body">
                    <?php 
            include "koneksi/koneksi.php";
            $sekarang=date('Y-m-d');
            $query=mysql_query("SELECT * from pemeriksaan where tanggal like '$sekarang%' ");
            $query1=mysql_query("SELECT * from pembayaran where tanggal like '$sekarang%' ");
            $query5=mysql_query("SELECT * from pasien where tanggal like '$sekarang%' ");
            $a=mysql_num_rows($query);
            $b=mysql_num_rows($query1);
            $pass=mysql_num_rows($query5);
             ?>
             <table>
             <tr>
             <td>Pemeriksaan</td>
             <td> :</td>
             <td><?php echo $a; ?></td>
             </tr>
             <tr>
             <td>Pembayaran</td>
             <td> :</td>
             <td><?php echo $b; ?></td>
             </tr>
             <tr>
             <td align="left">Pasien</td>
             <td> :</td>
             <td><?php echo $pass; ?></td>
             </tr>
             </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                <div class="panel-heading" style="background-color: #5cb85c; color: #fff">
                Bulan Ini
                </div>
                    <div class="panel-body">
                    <?php 
            include "koneksi/koneksi.php";
            $sekarang=date('Y-m-d');
            $bulan_ini=explode(' ',$sekarang);
            $bulan=$bulan_ini[2];
            $pemeriksaan1=mysql_query("SELECT * from pemeriksaan where tanggal like '$bulan%' ");
            $pembayaran1=mysql_query("SELECT * from pembayaran where tanggal like '$bulan%' ");
            $pasien1=mysql_query("SELECT * from pasien where tanggal like '$bulan%' ");
            $pem=mysql_num_rows($pemeriksaan1);
            $pmb=mysql_num_rows($pembayaran1);
            $psn=mysql_num_rows($pasien1);
             ?>
             <table>
             <tr>
             <td>Pemeriksaan</td>
             <td> :</td>
             <td><?php echo $pem; ?></td>
             </tr>
             <tr>
             <td>Pembayaran</td>
             <td> :</td>
             <td><?php echo $pmb; ?></td>
             </tr>
             <tr>
             <td align="left">Pasien</td>
             <td> :</td>
             <td><?php echo $psn; ?></td>
             </tr>
             </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                <div class="panel-heading" style="background-color: #d9534f; color: #fff">
                Tahun Ini
                </div>
                    <div class="panel-body">
                    <?php 
            include "koneksi/koneksi.php";
            $sekarang1=date('Y-m-d');
            $tahun_ini=explode(' ',$sekarang1);
            $tahun=$tahun_ini[1];
            $pemeriksaan2=mysql_query("SELECT * from pemeriksaan where tanggal like '$tahun%' ");
            $pembayaran2=mysql_query("SELECT * from pembayaran where tanggal like '$tahun%' ");
            $pasien2=mysql_query("SELECT * from pasien where tanggal like '$tahun%' ");
            $pem1=mysql_num_rows($pemeriksaan2);
            $pmb1=mysql_num_rows($pembayaran2);
            $psn1=mysql_num_rows($pasien2);
             ?>
             <table>
             <tr>
             <td>Pemeriksaan</td>
             <td> :</td>
             <td><?php echo $pem1; ?></td>
             </tr>
             <tr>
             <td>Pembayaran</td>
             <td> :</td>
             <td><?php echo $pmb1; ?></td>
             </tr>
             <tr>
             <td align="left">Pasien</td>
             <td> :</td>
             <td><?php echo $psn1; ?></td>
             </tr>
             </table>
                    </div>
                </div>
            </div>
        <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                <div class="panel-heading" style="background-color: #f0ad4e; color: #fff">
                Pembayaran
                </div>
                    <div class="panel-body">
                    <?php 
            include "koneksi/koneksi.php";
            $status="Sudah Bayar";
            $status1="Belum Bayar";
            $query2=mysql_query("SELECT * from pembayaran where status like '$status%' ");
            $query3=mysql_query("SELECT * from pembayaran where status like '$status1%' ");
            $c=mysql_num_rows($query2);
            $d=mysql_num_rows($query3);
             ?>
             <table>
             <tr>
             <td>Sudah Bayar</td>
             <td>:</td>
             <td><?php echo $c; ?></td>
             </tr>
             <tr>
             <td>Belum Bayar</td>
             <td>:</td>
             <td><?php echo $d; ?></td>
             </tr>
             <tr>
             <td>.</td>
             <td></td>
             <td></td>
             </tr>
             </table>
                    </div>
                </div>
            </div>
</div>
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>  
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>    
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
      
      /* ---------- Map ---------- */
    $(function(){
      $('#map').vectorMap({
        map: 'world_mill_en',
        series: {
          regions: [{
            values: gdpData,
            scale: ['#000', '#000'],
            normalizeFunction: 'polynomial'
          }]
        },
        backgroundColor: '#eef3f7',
        onLabelShow: function(e, el, code){
          el.html(el.html()+' (GDP - '+gdpData[code]+')');
        }
      });
    });



  </script>
<script>
<?php
if(!empty($_GET['pesan']) && $_GET['pesan']=='eror'){ ?>
    $('#pustakawan').modal('show');
<?php } ?>
</script>
  </body>
</html>