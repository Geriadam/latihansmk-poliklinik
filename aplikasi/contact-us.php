<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Beranda Poliklinik</title>
    
    <!-- core CSS -->
    <link href="boot/css/bootstrap.min.css" rel="stylesheet">
    <link href="boot/css/font-awesome.min.css" rel="stylesheet">
    <link href="boot/css/animate.min.css" rel="stylesheet">
    <link href="boot/css/prettyPhoto.css" rel="stylesheet">
    <link href="boot/css/main.css" rel="stylesheet">
    <link href="boot/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
   <link rel="shortcut icon" href="hospital.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +628 1559 9659 80</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                                <lI></lI>
                                <li></li>
                                <li></li>
                                <lI></lI>
                                <li></li>
                                <li></li>
                                <li><a href="admin/index.php" title="Login Administrator"><i class="fa fa-user"></i></a></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                     <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Beranda</a></li>
                        <li><a href="services.php">Fasilitas</a></li>
                        <li><a href="portfolio.php">Galeri</a></li>
                        <li><a href="contact-us.php">Info Layanan</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->


    <section id="contact-info">
        <div class="center">                
            <h2>Alamat Poliklinik</h2>
            <p class="lead">Kami Mempunyai beberapa cabang di kota kota besar</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Cabang Jombang</h5>
                                    <p>Jl Jakarta No 1 CUrahmalang <br>
                                    Sumobito , Jombang</p>
                                    <p>Telp. +628 1559 9659 80<br>
                                    Email : polisehat@gmail.com</p>
                                </address>

                                <address>
                                    <h5>Cabang Mojokerto</h5>
                                    <p>Jl Pulorejo<br>
                                    Prajurit Kulon , Mojokerto</p>                                
                                     <p>Telp. +628 1559 9659 80<br>
                                    Email : polisehat@gmail.com</p>
                                </address>
                            </li>


                            <li class="col-sm-6">
                                <address>
                                    <h5>Cabang Surabaya</h5>
                                    <p>Dukuh Kupang Timur No. 12<br>
                                    Dukuh Pakis , Surabaya</p>
                                     <p>Telp. +628 1559 9659 80<br>
                                    Email : polisehat@gmail.com</p>
                                </address>

                                <address>
                                    <h5>Cabang </h5>
                                    <p>Turen <br>
                                    Turen , Malang</p>
                                     <p>Telp. +628 1559 9659 80<br>
                                    Email : polisehat@gmail.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Komentar</h2>
                <p class="lead">Silahkan tinggalkan pesan anda.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                    <div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Kirim</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->


    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Develope With</h3>
                        <ul>
                            <li><a href="#">Bootstrap 3</a></li>
                            <li><a href="#">Jquery 1.11.4</a></li>
                            <li><a href="#">Corlate Template Bootstrap</a></li>
                            <li><a href="#">PHP 5</a></li>
                            <li><a href="#">Mysql Database</a></li>
                            <li><a href="#">Plugin Bootstrap</a></li>
                            <li><a href="#">Sublime Text</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Partner</h3>
                        <ul>
                            <li><a href="#">Radio Manja F.M</a></li>
                            <li><a href="#">Warung Sagu</a></li>
                            <li><a href="#">R.S Umum Mojokerto</a></li>
                            <li><a href="#">Apotek Sehat Selalu</a></li>
                            <li><a href="#">Percetakan Al-Fajar</a></li>
                            <li><a href="#">Cafe GT</a></li>
                            <li><a href="#">Graha Poppy</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    @ <?php echo date('Y'); ?> <a target="_blank" href="http://teknosut.blogspot.com/" title="Poliklinik Sehat Selalu">Poliklinik Sehat Selalu</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Jl. Jakarta No 1 - Sumobito - Jombang</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="boot/js/jquery.js"></script>
    <script src="boot/js/bootstrap.min.js"></script>
    <script src="boot/jquery.prettyPhoto.js"></script>
    <script src="boot/js/jquery.isotope.min.js"></script>
    <script src="boot/js/main.js"></script>
    <script src="boot/js/wow.min.js"></script>
</body>
</html>