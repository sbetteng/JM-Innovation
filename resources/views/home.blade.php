@extends('layouts.header')
@section('content')

<body class="no-trans">
        <!-- scrollToTop -->
        <!-- ================ -->
        <div class="scrollToTop"><i class="icon-up-open-big"></i></div>

        <!-- header start -->
        <!-- ================ --> 
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
        <img src="images/banner.jpg" alt="Chania" width="1350" height="150">
        <div class="carousel-caption">
          <h1 class="text-center"><span>Visi</span></h1>
            <h3 class="text-center"></h3>
            <p class="lead text-center">Menjadi Perusahaan jalan tol nasional terbesar, terpercaya, dan berkesinambungan.</p></p>
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
                                    <a class="btn btn-default btn-block" href="{{ url ('/lip')}}">Lembar Ide Perbaikan (LIP)</a>
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
                                                        <p>Suatu alat yang dapat digunakan oleh PEKERJA untuk menyampaikan permasalahan yang timbul di tempat kerja serta ide untuk perbaikannya secara INDIVIDU(Perorangan).
                                                        </p>
                                                    <h3>Tujuan</h3>
                                                        <p>- Memotivasi Karyawan untuk menciptakan  ide  yang PENTING  &  BERMANFAAT bagi perusahaan.
                                                        </p>
                                                        <p>
                                                        - Mempermudah  Wakil Manajemen  unutk mendapatkan data   permasalahan di lingkungan kerja dan melaksanakan   perbaikan.
                                                        </p>
                                                    <h3>IDE</h3>
                                                        <p>Benar-benar Bersifat INDIVIDU</p>
                                                    <h3></h3>
                                                    </div>
                                                    <div class="col-md-6">
                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img src="images/portfolio-1.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cara Pengisian</button>
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
                                                <h4 class="modal-title" id="project-2-label">Perbaikan Praktis (PP)</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h3>Definition</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>Metode perbaikan yang berkelanjutan yang dilaksanakan secara individu maupun kelompok (1-2 orang) untuk menyelesaikan permasalahan yang telah diketahui penyebab dan ide perbaikannya
                                                        </p>
                                                    <h3>Tujuan</h3>
                                                        <p>1.Wadah bagi perbaikan mutu yang berasal dari IDE INDIVIDUAL & LIP ORANG LAIN.</p>
                                                        <p>2.Mendorong KREATIFITAS dan cara BERFIKIR STRATEGIS bagi pekerja</p>
                                                        <p>3.Meningkatkan KEPEDULIAN MUTU</p>
                                                        <p>4.OPTIMALISASI penyelesaian masalah</p>
                                                        <p>5.Melatih KEPEKAAN terhadap penyelesaian masalah</p>
                                                        <p>6.Mengembangkan pola HUBUNGAN EFEKTIF antara atasan dan bawahan</p>
                                                    <h3>Syarat - Syarat</h3>
                                                        <p>1.Dilakukan oleh PEKERJA.</p>
                                                        <p>2.Memiliki Latar Belakang PERSOALAN yang JELAS.</p>
                                                        <p>3.Perbaikan tidak bertujuan merubah KEBIJAKAN/ PERATURAN.</p>
                                                        <p>4.Mengedepankan pembuatan / modifikasi ALAT/MESIN atau perubahan CARA KERJA.</p>
                                                        <p>5.Berpedoman pada EFESIENSI BIAYA dan OPTIMALISASI.</p>
                                                        <p>6.SARAN dan IDE pada bidang tunggal ataupun multifungsi.</p>
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
                                                <h4 class="modal-title" id="project-3-label">Kelompok Perbaikan Mutu (KPM)</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h3>Definition</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>Metode perbaikan yang berkelanjutan yang dilaksanakan oleh kumpulan pekerja (3 - 4 orang) yang berada pada unit/bagian yang sama untuk menyelesaikan permasalahan dimana penyebab dan ide perbaikannya harus melalui proses pengujian.</p>
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
                                                <h4 class="modal-title" id="project-5-label">Proyek Perbaikan Manajemen(PPM)</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h3>Definition</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>Metode perbaikan yang berkelanjutan yang dilaksanakan oleh kumpulan pekerja (5 - 10 orang) yang berada pada unit/bagian yang     berbeda untuk menyelesaikan permasalahan dimana penyebab dan ide perbaikannya harus melalui proses pengujian.</p>
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
        <div class="section translucent-bg bg-image-2 pb-clear">
            <div class="container object-non-visible" data-animation-effect="fadeIn">
                <h1 id="clients" class="title text-center">Tata Nilai</h1>
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
            </div>

            <div id="mySlide" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#mySlide" data-slide-to="0" class="active"></li>
              <li data-target="#mySlide" data-slide-to="1"></li>
              <li data-target="#mySlide" data-slide-to="2"></li>
              <li data-target="#mySlide" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

              <div class="item active">
                <img src="images/banner1.jpg" alt="Chania" width="100%" max-height="700px">
                <div class="carousel-caption">
                  <h3>Chania</h3>
                  <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
              </div>

              <div class="item">
                <img src="images/banner1.jpg" alt="Chania" width="100%" max-height="700px">
                <div class="carousel-caption">
                  <h3>Chania</h3>
                  <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
              </div>
            
              <div class="item">
                <img src="images/banner1.jpg" alt="Flower" width="100%" max-height="700px">
                <div class="carousel-caption">
                  <h3>Flowers</h3>
                  <p>Beatiful flowers in Kolymbari, Crete.</p>
                </div>
              </div>

              <div class="item">
                <img src="images/banner1.jpg" alt="Flower" width="100%" max-height="700px">
                <div class="carousel-caption">
                  <h3>Flowers</h3>
                  <p>Beatiful flowers in Kolymbari, Crete.</p>
                </div>
              </div>
          
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#mySlide" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mySlide" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
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


@endsection