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
$res=mysql_query("SELECT * FROM pegawai WHERE username=".$_SESSION['username']);
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
    <link rel="stylesheet" type="text/css" href="bootstrap/css/chosen.css" />
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
                    <h3 class="page-header"><i class="fa fa-laptop"></i>Pemeriksaan Pasien</h3>
                </div>
            </div>
              
            <div class="row">
                <div class="container">
  <div class="panel panel-default">
  <div class="panel-heading" style="height: 50px; color: #fff;padding-top: 3px;">
  <div class="panel-title">
  <a href="pasien.php" class="btn btn-primary" style="margin-left: 15px;">
                            <i class="glyphicon glyphicon-chevron-left"></i>Back
                        </a>
  </div>
  </div>
    <div class="panel-body">
  <?php
$newID = date('YmdHis');;

?>
<form action="periksa-proses-tambah.php" method="post" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <div class="input-group">
            <label style="float: left;">Nama Pasien  </label><br>
<?php
include "koneksi/koneksi.php";
$id=$_GET['pasien'];
$query = "SELECT * FROM pasien where id_pasien=$id";
$sql = mysql_query ($query);
while ($a = mysql_fetch_array ($sql)) {?>
            <input type="hidden" class="text" name="id-periksa" size="45" readonly="" value="<?php echo $newID; ?>">
            <input type="text" disabled class="form-control" name="okde" size="45" readonly=""  value="<?php echo $a['nama']; ?>">
            <input type="hidden" class="form-control" name="id-pasien" size="45" value="<?php echo $a['id_pasien']; ?>">
            <input type="hidden"name="id-poli" value="<?php echo $a['poliklinik']; ?>">
  					</div>
          </div>
  <?php } ?>
<div class="form-group">
            <div class="input-group">
            <label style="float: left;">Diagnosa  </label><br>
<select name="id-penyakit" data-placeholder="Pilih Jenis Penyakit" id="oke1" class="form-control" required="required">
<option value="0">---- Pilih Diagnosa ----</option>
<?php
include "koneksi/koneksi.php";
$id=$_GET['poliklinik'];
$query = "SELECT * FROM penyakit where id_poli=$id";
$sql = mysql_query ($query);
while ($peny = mysql_fetch_array ($sql)) {
echo "<option value='$peny[id_penyakit]'>$peny[nama_penyakit]</option>";
}
?>
</select>

            </div>
          </div>
<div class="form-group">
            <div class="input-group">
            <label style="float: left;">Nama Dokter  </label><br>
<select data-placeholder="Pilih Nama Dokter" id="oke2" class="form-control" name="id-dokter" required="required">
<option value="0">---- Pilih Data Dokter ----</option>
<?php
include "koneksi/koneksi.php";
$id=$_GET['poliklinik'];
$query = "SELECT * FROM dokter where poliklinik=$id";
$sql = mysql_query ($query);
while ($dok = mysql_fetch_array ($sql)) {
echo "<option value='$dok[id_dokter]'>$dok[nama]</option>";
}
?>
</select>
            </div>
          </div>
<div class="form-group">
            <div class="input-group">
              <label style="float: left;">Nama Obat  </label><br>
<?php
include "koneksi/koneksi.php";
$query = mysql_query("SELECT * FROM obat ORDER BY nama_obat");
$arrpropinsi = array();
while ($row = mysql_fetch_array ($query))  {
$arrpropinsi [ $row['id_obat']." ".$row['harga']." ".$row['stok'] ] = $row['nama_obat'];
}?>
<select name="id-obat[]" data-placeholder="Pilih Jenis Obat" id="oke3" multiple class="form-control" required="required">
<?php
foreach($arrpropinsi as $kode=>$nama) {
echo "<option value='$kode'>$nama</option>";
}?>
</select>
            </div>
          </div>
 <div class="form-group">
                  <div class="input-group">
                    <label>Jumlah</label>
              <input name="jumlah" type="number" class="form-control" id="prd_name" placeholder="Jumlah" size="1"  required="required" />
            </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <label>Catatan</label>
             <textarea name="catatan" class="form-control" required="required" placeholder="Catatan Dokter" rows="3"></textarea>
            </div>
                </div>
                <div class="form-group">
                	<input name="login" type="submit" class="btn btn-success" value="Tambah Data" />
                  <input type="reset" name="login" class="btn btn-primary" value="Reset" />
                  <button aria-hidden="true" data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
                </div>
            </form>
</div>
</div>
</div>
</div> 
 </section>
      </section>
      <!--main content end-->
</div>
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
    <script src = "bootstrap/css/chosen.jquery.js"></script>
   
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
<script type = "text/javascript">
  $("#oke").chosen({
    no_results_text: "Maaf, Data Tidak Di Temukan",
    width: "300px",
    enable_split_word_search: "false",
  });
</script>
<script type = "text/javascript">
  $("#oke1").chosen({
    no_results_text: "Maaf, Data Tidak Di Temukan",
    width: "300px",
    enable_split_word_search: "false",
  });
</script>
<script type = "text/javascript">
  $("#oke2").chosen({
    no_results_text: "Maaf, Data Tidak Di Temukan",
    width: "300px",
    enable_split_word_search: "false",
  });
</script>
<script type = "text/javascript">
  $("#oke3").chosen({
    no_results_text: "Maaf, Data Tidak Di Temukan",
    width: "300px",
    enable_split_word_search: "false",
  });
</script>
<?php
if(!empty($_GET['pesan']) && $_GET['pesan']=='eror'){ ?>
    $('#pustakawan').modal('show');
<?php } ?>
</body></html>