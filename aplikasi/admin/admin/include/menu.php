      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Menu Sidebar" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">Poliklinik <span class="lite">Sehat Selalu</span></a>
            <!--logo end-->

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="images/admin.png" width="30" height="30">
                            </span>
                            <span class="username">Administrator</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li>
                                <a tabindex="-1" data-toggle="modal" data-target="#pustakawan" href="ganti-pas.php?id=<?php echo $_SESSION['username']; ?>"><i class="icon_key_alt"></i> Ganti Password</a>
                            </li>
                            <li>
                                <a href="logout.php"><i class="icon_close_alt"></i>Keluar</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->
      <div aria-hidden="true" aria-labelledby="myModalLabel2" role="dialog" tabindex="-1" id="pustakawan" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                                              <h4 class="modal-title">Ganti Password</h4>
                                          </div>
                                          <div class="modal-body">
                                          <?php include "ganti-password.php"; ?>
                                          </div>
                                      </div>
                                  </div>
                              </div>