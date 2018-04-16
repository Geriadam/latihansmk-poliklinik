<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4 class="modal-title" id="myModalLabel">Edit Data Dokter</h4>
    </div>
    <div class="modal-body">
<form action="pasien-proses-edit.php?edit=1" method="post" role="form" enctype="multipart/form-data" name="form-edit">
                <div class="form-group">
                  <div class="input-group">
                    <label>Nama</label>
                     <?php
                                            include "koneksi/koneksi.php";
                                             $pasien=$_GET['pasien'];
$guak=mysql_query("SELECT A.id_pasien,A.nama,A.alamat,A.tanggal_lahir,A.telp,A.jenis_kelamin,A.tanggal,A.poliklinik,B.nama_poli from pasien A,poliklinik B WHERE A.poliklinik=B.id_poli AND id_pasien ='$pasien'");
                                            while($a=mysql_fetch_array($guak)){
?>
              <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" required="required" value="<?php echo $a[1]; ?>" />
               <input name="id" type="hidden" class="form-control" id="nama" placeholder="Nama" required="required" value="<?php echo $a[0]; ?>" />
            </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <label style="float: left;">Alamat  </label><br>
              <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat" type="text"  required="required" ><?php echo $a[2]; ?></textarea>
            </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <label>Telepon</label>
              <input name="telp" type="text" class="form-control" id="telp" placeholder="Telepon" maxlength="12"  required="required"  value="<?php echo $a[4]; ?>"/>
            </div>
                </div>
                <div class="form-group">
                <div class="input-group">
                <label style="float: left;">Tanggal Lahir  </label></br>
             <div class="input-group date form_date  col-lg-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" type="text"  value="<?php echo $a[3]; ?>" readonly name="tanggal" style="float: left;"  required="required">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                </div>
                <input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
            <div class="form-group">
                <div class="input-group">
            <label style="float: left;">Jenis Kelamin  </label><br>
            <div class="radio">
            <?php
            $kelamin=$a[5];
            if($kelamin=="Laki-Laki"){
              echo " <label class='radio-inline'><input type='radio' name='jk' value='Laki-Laki' checked>Laki-Laki</label>";
              echo " <label class='radio-inline'><input type='radio' name='jk' value='Perempuan'>Perempuan</label>";
            }
            else{
              echo " <label class='radio-inline'><input type='radio' name='jk' value='Laki-Laki'>Laki-Laki</label>";
              echo " <label class='radio-inline'><input type='radio' name='jk' value='Perempuan' checked>Perempuan</label>";
            }
            ?>
            </div></div></div>
            <div class="form-group">
                  <div class="input-group">
                    <label>Poliklinik</label>
              <select name="poli" class="form-control">
              <option value="<?php echo $a[7]; ?>"><?php echo $a[8]; }?></option>
                <?php
                include "koneksi/koneksi.php";
                $sql=mysql_query("select * from poliklinik order by id_poli asc");
                while($a=mysql_fetch_array($sql)){?>
                <option value="<?php echo $a[0]; ?>"><?php echo $a[1]; } ?></option>
              </select>
            </div>
                </div>
                <div class="form-group">
                  <input name="login" type="submit" class="btn btn-success" value="Edit Data" />
                  <input type="reset" name="login" class="btn btn-primary" value="Reset" />
                  <button aria-hidden="true" data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
                </div>
      <script type="text/javascript">
    $('.form_date').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>
            </form>
            
    </div>
  </div>
</div>

<script>
    /* center modal */
    function centerModals(){
      $('.modal').each(function(i){
      var $clone = $(this).clone().css('display', 'block').appendTo('body');
      var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
      top = top > 0 ? top : 0;
      $clone.remove();
      $(this).find('.modal-content').css("margin-top", top);
      });
    }
    $('.modal').on('show.bs.modal', centerModals);
    $(window).on('resize', centerModals);
  </script>