<?php
session_start();
error_reporting(0);
include_once 'koneksi/koneksi.php';
$res=mysql_query("SELECT * FROM admin WHERE user=".$_SESSION['username']);
$a=mysql_fetch_array($res);
?>
<form action="ganti-password-proses.php" method="post" role="form">
                <div class="form-group">
                	<div class="input-group">
                		<label>Password Lama</label>
  						<input autofocus name="pass_lama" type="text" class="form-control" id="nama" placeholder="Masukkan Password Lama" required="required"/>
              <input type="hidden" name="ngirim" value="ya">
              <input type="hidden" name="id" value="<?php echo $_SESSION['username']; ?>">
  					</div>
                </div>
                 <div class="form-group">
                  <div class="input-group">
                    <label>Password Baru</label>
              <input name="pass_baru" type="text" class="form-control" id="nama" placeholder="Masukkan Password Baru" required="required"/>
            </div>
                </div>
                 <div class="form-group">
                  <div class="input-group">
                    <label>Ulangi Password Anda </label>
              <input name="pass_ulang" type="text" class="form-control" id="nama" placeholder="Ulangi Password" required="required"/>
            </div>
                </div>
                
                <div class="form-group">
                	<input name="login" type="submit" class="btn btn-primary" value="Ganti Pass" />
                  <button aria-hidden="true" data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
                </div>
            </form>