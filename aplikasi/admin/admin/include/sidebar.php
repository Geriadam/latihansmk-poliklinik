  <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Beranda</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_profile"></i>
                          <span>Master</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="dokter.php">Dokter</a></li>                          
                          <li><a class="" href="pegawai.php">Pegawai</a></li>
                          <li><a class="" href="pasien.php">Pasien</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Administrasi</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="pemeriksaan.php">Pemeriksaan</a></li>
                          <li><a class="" href="pembayaran.php">Pembayaran</a></li>
                      </ul>
                  </li>
                   <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Lainnya</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="poliklinik.php">Poliklinik</a></li>
                          <li><a class="" href="penyakit.php">Diagnosa</a></li>
                          <li><a class="" href="obat.php">Obat</a></li>
                      </ul>
                  </li>
                  <li>
                      <a tabindex="-1" data-toggle="modal" data-target="#backup" href="#backup">
                          <i class="icon_cog"></i>
                          <span>Pengaturan</span>
                      </a>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <div aria-hidden="true" role="dialog" tabindex="-1" id="backup" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                                              <h4 class="modal-title">Database</h4>
                                          </div>
                                          <div class="modal-body">
                                          <?php
                                          include "backup.php";
                                          ?>
                                          </div>
                                      </div>
                                  </div>
                              </div>