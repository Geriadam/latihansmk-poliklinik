<form action="obat-proses-tambah.php?tambah=1" method="post" role="form" enctype="multipart/form-data">
                <div class="form-group">
                	<div class="input-group">
                		<label>Nama Obat</label>
  						<input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" required="required" />
  					</div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <label>Jenis</label>
              <select name="jenis" class="form-control">
              <option value="Pil">Pil</option>
              <option value="Kapsul">Kapsul</option>
              <option value="Tablet">Tablet</option>
              <option value="Sirup">Sirup</option>
              <option value="Puyer">Puyer</option>
              </select>
            </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <label>Harga</label>
              <input name="harga" type="text" class="form-control" id="harga" placeholder="Harga" required="required" />
            </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <label>Stok</label>
              <input name="stok" maxlength="3" type="text" class="form-control" id="stok" placeholder="Stok" size="1" required="required" />
            </div>
                </div>
                <div class="form-group">
                	<input name="login" type="submit" class="btn btn-success"  value="Tambah Data" />
                  <input type="reset" name="login" class="btn btn-primary" value="Reset" />
                  <button aria-hidden="true" data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
                </div>
            </form>