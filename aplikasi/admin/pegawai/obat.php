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
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Data Obat</h3>
                </div>
            </div>
              
            <div class="row">
                <div class="container">
  <div class="panel panel-default">
   <div class="panel-heading" style="height: 50px; color: #fff;padding-top: 3px;">
  <div class="panel-title">
  <a data-toggle="modal" href="#ModalTambah" class="Open-Tambah btn btn-primary" style="margin-left: 15px;">
                    <i class="glyphicon glyphicon-plus"></i>Tambah
                    </a>
  </div>
  </div>
    <div class="panel-body">
<?php
if(!empty($_GET['pesan']) && $_GET['pesan']=='sukses'){
    echo '<div class="alert alert-success alert-dismissible alert" role="alert">';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    echo '<h6><strong>Berhasil!</strong> Data Berhasil Di Simpan</h6></div>';
}?>
<?php
if(!empty($_GET['hapus']) && $_GET['hapus']=='sukses'){
    echo '<div class="alert alert-success alert-dismissible" role="alert">';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    echo '<h6><strong>Berhasil!</strong> Data Berhasil Di Hapus</h6></div>';
}?>
<?php
if(!empty($_GET['message']) && $_GET['message']=='success'){
    echo '<div class="alert alert-success alert-dismissible" role="alert">';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    echo '<h6><strong>Berhasil!</strong> Data Berhasil Di Update</h6></div>';
}
?>
                   <!-- Tabel Obat-->
<table cellspacing='1' cellpadding='3' width='100%' style='font-size: 12px;' class="table table-striped table-bordered table-hover" id="contoh">
<thead>
    <tr align='left'>
        <th width="5%">No.</th>
        <th width="10%">Nama Obat</th>
        <th width="10%">Jenis</th>
        <th width="10%">Harga</th>
        <th width="10%">Stok</th>
        <th width="10%">Pilihan</th>
    </tr>
</thead>
<tbody>
    <?php
    $query=mysql_query("SELECT * FROM obat ORDER BY nama_obat ASC");
    $no=1;
    while($a=mysql_fetch_array($query)){
  ?>
    <tr align='left'>
        <td width="5%"><?php echo $no; ?></td>
        <td width="10%"><?php echo $a[1]; ?></td>
        <td width="10%"><?php echo $a[2]; ?></td>
        <td width="10%"><?php echo "Rp. ".$a[3]; ?></td>
        <td width="10%"><?php echo $a[4]; ?></td>
        <td width="10%">
<a class="btn btn-success Open-Edit" href='#' title='Edit Data' id="<?php echo $a[0]; ?>" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>
<a href="#" onclick="confirm_modal('obat-hapus.php?hapus=1&obat=<?php echo $a[0]; ?>');"><button class="btn-danger btn"><span class="glyphicon glyphicon-trash"></span></button></a>
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
<div class="modal fade" id="modal_delete">
<div class="modal-dialog">
  <div class="modal-content" style="margin-top:100px;">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title" style="text-align:center;">Anda yakin ingin menghapus data ini ?</h4>
    </div>
    <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
      <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
      <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
    </div>
  </div>
</div>
</div>
<div aria-hidden="true" aria-labelledby="myModalLabel1" role="dialog" tabindex="-1" id="ModalTambah" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                                              <h4 class="modal-title">Tambah Data Obat</h4>
                                          </div>
                                          <div class="modal-body">
                                          <?php
                                          include "obat-tambah.php";
                                          ?>
                                          </div>
                                      </div>
                                  </div>
                              </div>
<div aria-hidden="true" aria-labelledby="myModalLabel2" role="dialog" tabindex="-1" id="ModalEdit" class="modal fade">

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
</script><script type="text/javascript">
$(document).ready(function(){
  $(".Open-Edit").click(function(e){
    var a = $(this).attr("id");
    $.ajax({
      url:"obat-edit.php",
      type:"GET",
      data:{obat:a},
      success:function(ajaxData){
        $("#ModalEdit").html(ajaxData);
        $("#ModalEdit").modal('show',{backdrop:'true'});
      }
    });

  });
});
</script>
 <script type="text/javascript">
  function confirm_modal(delete_url)
  {
    $('#modal_delete').modal('show', {backdrop: 'static'});
    document.getElementById('delete_link').setAttribute('href' , delete_url);
  }
</script>
  </body>
</html>