<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>JM Innovation</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

        <!-- Plugins -->
        <link href="css/animations.css" rel="stylesheet">

        <!-- Worthy core CSS file -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom css --> 
        <link href="css/custom.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/icon.png">
        
    </head>

    <body class="no-trans">
        <!-- scrollToTop -->
        <!-- ================ -->
        <div class="scrollToTop"><i class="icon-up-open-big"></i></div>

        <!-- header start -->
        <!-- ================ --> 
        <header class="header fixed clearfix navbar navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <!-- header-left start -->
                        <!-- ================ -->
                        <div class="header-left clearfix">

                            <!-- logo -->
                            <div class="logo smooth-scroll">
                                <a href="#banner"><img id="logo" src="images/logo.png" alt="Worthy"></a>
                            </div>

                            <!-- name-and-slogan -->
                            <div class="site-name-and-slogan smooth-scroll">
                                <div class="site-name"><a href="#banner"></a></div>
                                <div class="site-slogan"><a target="_blank" href="http://htmlcoder.me"></a></div>
                            </div>

                        </div>
                        <!-- header-left end -->

                    </div>
                    <div class="col-md-8">

                        <!-- header-right start -->
                        <!-- ================ -->
                        <div class="header-right clearfix">

                            <!-- main-navigation start -->
                            <!-- ================ -->
                            <div class="main-navigation animated">

                                <!-- navbar start -->
                                <!-- ================ -->
                                <nav class="navbar navbar-default" role="navigation">
                                    <div class="container-fluid">

                                        <!-- Toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                                            
                                            <ul class="nav navbar-nav navbar-right ">
                                                @if (Auth::check())
                                                <li class="active drop-down-menu"><a href="
                                                ">Home</a></li>
                                                @else
                                                <li class="active"><a href="{{url('/')}}">Home</a></li>
                                                <li><a href="{{ url('/login')}}">Login</a></li>
                                                <li><a href="{{ url('/register')}}">Register</a></li>
                                                @endif
                                                <li><a href="#about">Kategori</a></li>
                                                <li><a href="#clients">Tentang</a></li>
                                                <li><a href="#contact">Bantuan</a></li>
                                            </ul>
                                        
                                        </div>

                                    </div>
                                </nav>
                                <!-- navbar end -->

                            </div>
                            <!-- main-navigation end -->

                        </div>
                        <!-- header-right end -->

                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <!-- banner start -->
        <!-- ================ -->
        <!-- <div id="banner" class="banner">
            <div class="banner-image"></div>
            <div class="banner-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
                            <h1 class="text-center"><span>Visi</span></h1>
                            <h3 class="text-center"></h3>
                            <p class="lead text-center">Menjadi Perusahaan jalan tol nasional terbesar, terpercaya, dan berkesinambungan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="banner" class="banner">
            <div class="banner-image"></div>
            <div class="banner-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
                            <h1 class="text-center"><span>Misi</span></h1>
                            <p class="lead text-center">1. Memimpin pembangunan jalan tol di Indonesia untuk meningkatkan konektivitas nasional.</p>
                            <p class="lead text-center">2. Menjalankan usaha jalan tol di seluruh rantai nilai secara profesional dan berkesinambungan.</p>
                            <p class="lead text-center">3. Memaksimalkan pengembangan kawasan untuk meningkatkan kemajuan masyarakat dan keuntungan perusahaan.</p>
                            <p class="lead text-center">4. Meningkatkan kepuasan pelanggan dengan pelayanan prima.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <!-- <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li> -->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/banner.jpg" alt="Chania" width="1350" height="350">
        <div class="carousel-caption">
          <h1 class="text-center"><span>Visi</span></h1>
            <h3 class="text-center"></h3>
            <p class="lead text-center">Menjadi Perusahaan jalan tol nasional terbesar, terpercaya, dan berkesinambungan.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/banner.jpg" alt="Chania" width="1350" height="350">
        <div class="carousel-caption">
          <h1 class="text-center"><span>Misi</span></h1>
            <p class="lead text-center">1. Memimpin pembangunan jalan tol di Indonesia untuk meningkatkan konektivitas nasional.</p>
            <p class="lead text-center">2. Menjalankan usaha jalan tol di seluruh rantai nilai secara profesional dan berkesinambungan.</p>
            <p class="lead text-center">3. Memaksimalkan pengembangan kawasan untuk meningkatkan kemajuan masyarakat dan keuntungan perusahaan.</p>
            <p class="lead text-center">4. Meningkatkan kepuasan pelanggan dengan pelayanan prima.</p>
        </div>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

       <!--  <h2>Automatic Slideshow</h2>
        <p>Change image every 3 seconds:</p>

        <div class="slideshow-container">

        <div class="mySlides fade">
         
          <img src="images/bg-image-1.jpg" style="width:100%">
         
            <div class="banner-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
                            <h1 class="text-center"><span>Visi</span></h1>
                            <h3 class="text-center"></h3>
                            <p class="lead text-center">Menjadi Perusahaan jalan tol nasional terbesar, terpercaya, dan berkesinambungan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="mySlides fade">
         
          <img src="images/bg-image-1.jpg" style="width:100%">
         
            <div class="banner-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
                            <h1 class="text-center"><span>Misi</span></h1>
                            <p class="lead text-center">1. Memimpin pembangunan jalan tol di Indonesia untuk meningkatkan konektivitas nasional.</p>
                            <p class="lead text-center">2. Menjalankan usaha jalan tol di seluruh rantai nilai secara profesional dan berkesinambungan.</p>
                            <p class="lead text-center">3. Memaksimalkan pengembangan kawasan untuk meningkatkan kemajuan masyarakat dan keuntungan perusahaan.</p>
                            <p class="lead text-center">4. Meningkatkan kepuasan pelanggan dengan pelayanan prima.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <!-- <span class="dot"></span>  -->
        </div>
        <!-- banner end -->

        <!-- section start -->
        <!-- ================ -->
        <div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 id="about" class="title text-center"><span>Kategori Proyek inovasi</span></h1>
                        <p class="lead text-center"></p>
                        <div class="space"></div>
                        <div class="isotope-container row grid-space-20">
                            <div class="col-sm-6 col-md-3 isotope-item web-design">
                                <div class="image-box">
                                    <div class="overlay-container">
                                        <img src="images/portfolio-1.jpg" alt="">
                                        <a class="overlay" data-toggle="modal" data-target="#project-1">
                                            <i class="fa fa-search-plus"></i>
                                            <!-- <span>Web Design</span> -->
                                        </a>
                                    </div>
                                    <a class="btn btn-default btn-block" href="{{ url('lip')}}">Lembar Ide Perbaikan (LIP)</a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="project-1-label">Lembar Ide Perbaikan (LIP)</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h3>Definition</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>Lembar Ide Perbaikan (LIP) adalah project lembar kerja kelompok ide perbaikan.</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img src="images/portfolio-1.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>

                            <div class="col-sm-6 col-md-3 isotope-item app-development">
                                <div class="image-box">
                                    <div class="overlay-container">
                                        <img src="images/portfolio-2.jpg" alt="">
                                        <a class="overlay" data-toggle="modal" data-target="#project-2">
                                            <i class="fa fa-search-plus"></i>
                                            <!-- <span>App Development</span> -->
                                        </a>
                                    </div>
                                    <a class="btn btn-default btn-block" href="PP.html">Perbaikan Praktis (PP)</a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="project-2-label">Project Title</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h3>Project Description</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img src="images/portfolio-2.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                            
                            <div class="col-sm-6 col-md-3 isotope-item web-design">
                                <div class="image-box">
                                    <div class="overlay-container">
                                        <img src="images/portfolio-3.jpg" alt="">
                                        <a class="overlay" data-toggle="modal" data-target="#project-3">
                                            <i class="fa fa-search-plus"></i>
                                            <!-- <span>Web Design</span> -->
                                        </a>
                                    </div>
                                    <a class="btn btn-default btn-block" href="KPM.html">Kelompok Perbaikan Mutu (KPM)</a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="project-3-label">Project Title</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h3>Project Description</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img src="images/portfolio-3.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                            
                            <div class="col-sm-6 col-md-3 isotope-item site-building">
                                <div class="image-box">
                                    <div class="overlay-container">
                                        <img src="images/portfolio-4.jpg" alt="">
                                        <a class="overlay" data-toggle="modal" data-target="#project-4">
                                            <i class="fa fa-search-plus"></i>
                                            <!-- <span>Site Building</span> -->
                                        </a>
                                    </div>
                                    <a class="btn btn-default btn-block" href="KIM.html">Kelompok inovasi Manajemen(KIM)</a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="project-4-label">Project Title</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h3>Project Description</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img src="images/portfolio-4.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                            
                            <div class="col-sm-6 col-md-3 isotope-item app-development">
                                <div class="image-box">
                                    <div class="overlay-container">
                                        <img src="images/portfolio-12.jpg" alt="">
                                        <a class="overlay" data-toggle="modal" data-target="#project-5">
                                            <i class="fa fa-search-plus"></i>
                                            <!-- <span>App Development</span> -->
                                        </a>
                                    </div>
                                    <a class="btn btn-default btn-block" href="PPM.html">Proyek Perbaikan Manajemen(PPM)</a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="project-5" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="project-5-label">Project Title</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h3>Project Description</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
                                                        <p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img src="images/portfolio-5.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>

                    
                        </div>
                        <!-- portfolio items end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- section end -->

        <!-- section start -->
        <!-- ================ -->
        <!-- <div class="section translucent-bg bg-image-2 pb-clear"> -->
            <div class="container object-non-visible" data-animation-effect="fadeIn">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel1" data-slide-to="1"></li>
              <li data-target="#myCarousel1" data-slide-to="2"></li>
              <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

              <div class="item active">
                <img src="images/banner.jpg" alt="Chania" width="1350" height="350">
                <div class="carousel-caption">
                  <h1 class="text-center"><span>Tata Nilai</span></h1>
                    <h3 class="text-center"></h3>
                    <p class="lead text-center">Tata Nilai merupakan nilai-nilai yang telah ada dalam setiap Insan Jasa Marga.</p>
                    <p class="lead text-center">Tata nilai ini merupakan perwujudan dari sikap dan perilaku seluruh karyawan Jasa Marga yang dilaksanakan untuk mendukung pencapaian tujuan perusahaan secara baik dan benar.</p>
                    <p class="lead text-center">Tata Nilai tersebut adalah:</p>
                </div>
              </div>

              <div class="item">
                <img src="images/banner.jpg" alt="Chania" width="1350" height="350">
                <div class="carousel-caption">
                  <h1 class="text-center"><span>JUJUR</span></h1>
                    <p class="lead text-center"> Jasa Marga dalam menjalankan kegiatan usahanya selalu JUJUR, adil, transparan dan Bebas dari benturan kepentingan.</p>
                    <br>
                    <h1 class="text-center"><span>SIGAP</span></h1>
                    <p class="lead text-center">Jasa Marga SIGAP melayani pelanggan dan pemangku kepentingan lainnya dengan bertindak peduli dan proaktif serta mengedepankan kehati-hatian.</p>
                    <br>
                </div>
              </div>

              <div class="item">
                <img src="images/banner.jpg" alt="Chania" width="1350" height="350">
                <div class="carousel-caption">
                  <h1 class="text-center"><span>MUMPUNI</span></h1>
                    <p class="lead text-center"> Jasa Marga MUMPUNI dalam bekerja atas dasar kompetensi, konsisten dan inovatif.</p>
                    <br>
                    <h1 class="text-center"><span>RESPEK</span></h1>
                    <p class="lead text-center">Jasa Marga RESPEK terhadap pemangku kepentingan dalam bersinergi mencapai prestasi.</p>
                    <br>
                </div>
              </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          </div>
                <<!-- h1 id="clients" class="title text-center">Tata Nilai</h1>
                <div class="space"></div>
                <p class="lead text-center">
                    Tata Nilai merupakan nilai-nilai yang telah ada dalam setiap Insan Jasa Marga.
                </p>
                <p class="lead text-center">
                    Tata nilai ini merupakan perwujudan dari sikap dan perilaku seluruh karyawan Jasa Marga yang dilaksanakan untuk mendukung pencapaian tujuan perusahaan secara baik dan benar.
                </p>
                <p class="lead text-center">
                    Tata Nilai tersebut adalah:
                </p>
                <div class="space"></div>
                <h2 id="clients" class="title text-center">JUJUR</h2>
                <p class="lead text-center">
                    Jasa Marga dalam menjalankan kegiatan usahanya selalu JUJUR, adil, transparan dan Bebas dari benturan kepentingan.
                </p>
                <div class="space"></div>
                <h2 id="clients" class="title text-center">SIGAP</h2>
                <p class="lead text-center">
                    Jasa Marga SIGAP melayani pelanggan dan pemangku kepentingan lainnya dengan bertindak peduli dan proaktif serta mengedepankan kehati-hatian.
                </p>
                <div class="space"></div>
                <h2 id="clients" class="title text-center">MUMPUNI</h2>
                <p class="lead text-center">
                    Jasa Marga MUMPUNI dalam bekerja atas dasar kompetensi, konsisten dan inovatif.
                </p>
                <div class="space"></div>
                <h2 id="clients" class="title text-center">RESPEK</h2>
                <p class="lead text-center">
                    Jasa Marga RESPEK terhadap pemangku kepentingan dalam bersinergi mencapai prestasi.
                </p>
                <div class="space"></div>
                </div>
            </div> -->
            <!-- section end -->
        <!-- section end -->

        <!-- footer start -->
        <!-- ================ -->
        <footer id="footer">

            <!-- .footer start -->
            <!-- ================ -->
            <div class="footer section">
                <div class="container">
                    <h1 class="title text-center" id="contact">Contact Us</h1>
                    <div class="space"></div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="footer-content">
                                <p class="large">Layanan ini berguna untuk bertanya dan memberikan masukan kepada JM Innovation.</p>
                                <ul class="list-icons">
                                    <li><i class="fa fa-map-marker pr-10"></i> Jasa Marga(Persero)Tbk.</li>
                                    <li><i class="fa fa-phone pr-10"></i> +021 841 3526</li>
                                    <li><i class="fa fa-fax pr-10"></i>+021 841 3630 </li>
                                    <li><i class="fa fa-envelope-o pr-10"></i>jminnovation@gmail.com</li>
                                </ul>
                                <ul class="social-links">
                                    <li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/HtmlCoder/714570988650168"><i class="fa fa-facebook"></i></a></li>
                                    <!-- <li class="twitter"><a target="_blank" href="https://twitter.com/HtmlcoderMe"><i class="fa fa-twitter"></i></a></li> -->
                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                    <!-- <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li> -->
                                    <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
                                    <!-- <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
                                    <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-content">
                                <form role="form" id="footer-form">
                                    <div class="form-group has-feedback">
                                        <label class="sr-only" for="name2">Name</label>
                                        <input type="text" class="form-control" id="name2" placeholder="Name" name="name2" required>
                                        <i class="fa fa-user form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label class="sr-only" for="email2">Email address</label>
                                        <input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2" required>
                                        <i class="fa fa-envelope form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label class="sr-only" for="message2">Message</label>
                                        <textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message2" required></textarea>
                                        <i class="fa fa-pencil form-control-feedback"></i>
                                    </div>
                                    <input type="submit" value="Send" class="btn btn-default">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .footer end -->

            <!-- .subfooter start -->
            <!-- ================ -->
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center">Copyright &copy; 2017 by JM Innovation.<a target="_blank" href="http://htmlcoder.me"></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .subfooter end -->

        </footer>
        <!-- footer end -->

        <!-- JavaScript files placed at the end of the document so the pages load faster
        ================================================== -->
        <!-- Jquery and Bootstap core js files -->
        <script type="text/javascript" src="plugins/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

        <!-- Modernizr javascript -->
        <script type="text/javascript" src="plugins/modernizr.js"></script>

        <!-- Isotope javascript -->
        <script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
        
        <!-- Backstretch javascript -->
        <script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

        <!-- Appear javascript -->
        <script type="text/javascript" src="plugins/jquery.appear.js"></script>

        <!-- Initialization of Plugins -->
        <script type="text/javascript" src="js/template.js"></script>

        <!-- Custom Scripts -->
        <script type="text/javascript" src="js/custom.js"></script>

        <!-- slide show -->
        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                   slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex> slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 5000); // Change image every 2 seconds
            }
        </script>

    </body>
</html>
