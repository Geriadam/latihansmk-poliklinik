<form action="pegawai-proses-tambah.php?tambah=1" method="post" role="form" enctype="multipart/form-data">
                <div class="form-group">
                	<div class="input-group">
                		<label>Nama</label>
  						<input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" required="required" />
  					</div>
                </div>
                <div class="form-group">
                	<div class="input-group">
                		<label style="float: left;">Alamat  </label><br>
  						<textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat" type="text"  required="required" ></textarea>
  					</div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <label>Telepon</label>
              <input name="telp" type="text" class="form-control" id="telp" placeholder="Telepon" maxlength="12"  required="required" />
            </div>
                </div>
                <div class="form-group">
                <div class="input-group">
                <label style="float: left;">Tanggal Lahir  </label></br>
             <div class="input-group date form_date  col-lg-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" type="text" value="" readonly name="tanggal" style="float: left;"  required="required">
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
              <label class="radio-inline"><input type="radio" name="jk" value="Laki-Laki">Laki-Laki</label>
              <label class="radio-inline"><input type="radio" name="jk" value="Laki-Perempuan">Perempuan</label>
            </div></div></div>
                <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
  <input type="text" name="username" maxlength="30" class="form-control" placeholder="Username" aria-describedby="basic-addon1"   required="required"/>
            </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon glyphicon glyphicon-knight" id="basic-addon2"></span>
  <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2"  required="required" />
            </div>
                </div>
                <div class="form-group">
                	<input name="login" type="submit" class="btn btn-success" value="Tambah Data" />
                  <input type="reset" name="login" class="btn btn-primary" value="Reset" />
                  <button aria-hidden="true" data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
                </div>
            </form>