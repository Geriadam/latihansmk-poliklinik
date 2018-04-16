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
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <!-- Date Picker -->
    <link href="datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <!-- Datables -->
    <link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="media/css/dataTables.bootstrap.css">
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
                    <h3 class="page-header"><i class="fa fa-money"></i> Data Pembayaran</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                        <li><a href="pembayaran.php"><i class="fa fa-money"></i>Data Pemayaran</a></li>                          
                    </ol>
                </div>
            </div>
              
            <div class="row">
                <div class="container"> 
  <div class="panel panel-default">
    <div class="panel-body"> 
                   <!-- Tabel Obat-->
<table cellspacing='1' cellpadding='3' width='100%' style='font-size: 12px;' class="table table-striped table-bordered table-hover" id="contoh">
<thead>
    <tr align='left'>
        <th width="5%">No.</th>
        <th width="10%">Nama Pasien</th>
        <th width="10%">Id Pemeriksaan</th>
        <th width="10%">Total</th>
        <th width="10%">Bayar</th>
        <th width="10%">Kembalian</th>
        <th width="10%">Status</th>
    </tr>
</thead>
<tbody>
     <?php
     $sql="SELECT pembayaran.id_pembayaran,pasien.nama,pembayaran.id_tindakan, pembayaran.total, pembayaran.bayar, pembayaran.kembalian,pembayaran.status
FROM pasien, pemeriksaan, pembayaran
WHERE pasien.id_pasien = pemeriksaan.id_pasien
AND pembayaran.id_tindakan = pemeriksaan.id_pemeriksaan
ORDER BY pembayaran.tanggal desc";
    $query=mysql_query($sql);
    $no=1;
    while($a=mysql_fetch_array($query)){
  ?>
    <tr align='left'>
        <td width="5%"><?php echo $no; ?></td>
        <td width="10%"><?php echo $a[1]; ?></td>
        <td width="10%"><?php echo $a[2]; ?></td>
        <td width="10%"><?php echo "Rp.$a[3]"; ?></td>
        <td width="10%"><?php echo "Rp.$a[4]"; ?></td>
        <td width="10%">
        <?php
        if($a[5]=='0'){
          echo "Tidak ada kembalian";
        }
        else{
         echo "Rp.$a[5]"; 
       }
         ?>
        </td>
        <td width="10%">
        <?php
        $status=$a[6];
        if($status=='Pending'){
        echo '<a class="btn btn-danger">'.$status.'</a>';
        }
        else{
          echo '<a class="btn btn-success">'.$status.'</a>';
        }
        ?>
        </td>
    </tr>
        <?php
    $no++;
  }
  ?>
  </tbody>
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
    <script type="text/javascript" src="media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="datepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="datepiecker/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
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
<script type="text/javascript">
$(document).ready(function (){
      $('#contoh').DataTable();
});
</script>
  </body>
</html>