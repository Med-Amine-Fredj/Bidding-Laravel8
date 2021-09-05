

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="description" content="">
        <meta name="author" content="ScriptsBundle">
        <title>AdForest | Largest Classifieds Portal</title>
        <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
        <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />
        <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}" type="text/css">
        <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
        <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{asset('css/et-line-fonts.css')}}" type="text/css">
        <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{asset('css/forest-menu.css')}}" type="text/css">
        <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}" type="text/css">
        <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
        <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
        <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
        <link href="{{asset('css/nouislider.min.css')}}" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
        <link href="{{asset('css/slider.css')}}" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.css')}}">
        <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
        <link href="{{asset('skins/minimal/minimal.css')}}" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
        <link href="{{asset('css/responsive-media.css')}}" rel="stylesheet">
        <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
        <link rel="stylesheet" id="color" href="{{asset('css/colors/defualt.css')}}">
        <!-- =-=-=-=-=-=-= For Style Switcher =-=-=-=-=-=-= -->
        <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
        <!-- JavaScripts -->
        <script src="{{asset('js/modernizr.js')}}"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
     </head>
   <body>
      <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
          <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
      </div>


      <!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
      <div class="colored-header">
         <!-- Top Bar -->
         @include('TopBarWithLogin')
         <!-- Top Bar End -->
         <!-- Navigation Menu -->
         @include('navbar')
      </div>
      <!-- Navigation Menu End -->
      <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
      <div class="page-header-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="header-page">
                     <h1>About Us</h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
      <div class="small-breadcrumb">
         <div class="container">
            <div class=" breadcrumb-link">
               <ul>
                  <li><a href="home">Home</a></li>

                  <li><a class="active" href="about">About Us</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding pattern_dots">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
                     <div class="about-us-content">
                        <div class="heading-panel">
                           <h3 class="main-title text-left">
                              About AdForest
                           </h3>
                        </div>
                        <h2></h2>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambledit to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.It has survived not only five centuries, but also the leap into  publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Hmply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambledit to make a type specimen It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
                     <div class="about-page-featured-image">
                        <a href="#"><img src="images/Advertising-PNG-File.png" alt=""></a>
                     </div>
                  </div>
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
         <section class="about-us">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12 no-padding">
                     <!-- service box 3 -->
                     <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                        <div class="why-us border-box text-center">
                           <h5>Why choose us</h5>
                           <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna. Quisque id libero risus. Aliquam accumsan erat id sem placerat tempus.</p>
                        </div>
                     </div>
                     <!-- service box end -->
                     <!-- service box 3 -->
                     <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                        <div class="why-us border-box text-center">
                           <h5>Our mission</h5>
                           <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna. Quisque id libero risus. Aliquam accumsan erat id sem placerat tempus.</p>
                        </div>
                        <!-- end featured-item -->
                     </div>
                     <!-- service box end -->
                     <!-- service box 3 -->
                     <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                        <div class="why-us border-box text-center">
                           <h5>Only creative solutions</h5>
                           <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna. Quisque id libero risus. Aliquam accumsan erat id sem placerat tempus.</p>
                        </div>
                        <!-- end featured-item -->
                     </div>
                     <!-- service box end -->
                  </div>
               </div>
            </div>
            <!-- end container -->
         </section>
         <div class="clearfix"></div>
         <!-- =-=-=-=-=-=-= Statistics Counter =-=-=-=-=-=-= -->
         <div class="funfacts custom-padding parallex">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="1238" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4>Total <span>Cars</span></h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="820" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4>Hose For <span>Sale</span></h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="1042" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4>Active <span>Users</span></h4>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                     <div class="number"><span class="timer" data-from="0" data-to="34" data-speed="1500" data-refresh-interval="5">0</span>+</div>
                     <h4>Featured <span>Jobs</span></h4>
                  </div>
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
         </div>
         <!-- /.funfacts -->
         <!-- =-=-=-=-=-=-= Statistics Counter End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Pricing =-=-=-=-=-=-= -->
         <section class="custom-padding">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <!-- Main Title -->
                        <h1>Choose the best <span class="heading-color"> subscription </span>for you</h1>
                        <!-- Short Description -->
                        <p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his dico ut debet consectetuer.</p>
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div class="row pricing">
                        <div class="col-sm-6 col-lg-4 col-md-4">
                           <div class="block">
                              <h3>Individual</h3>
                              <span class="type">Standalone</span>
                              <span class="price">$0</span>
                              <span class="time">30 days free trail</span>
                              <ul>
                                 <li>All the awesomeness</li>
                                 <li>Up to 15 projects</li>
                                 <li>Unlimited tasks</li>
                                 <li>Basic Dashboards</li>
                              </ul>
                              <a href="#" class="btn btn-theme">Select Plan <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-md-4">
                           <div class="block featured">
                              <h3>Business</h3>
                              <span class="type">Teams</span>
                              <span class="price">$5</span>
                              <span class="time">after the 14 days free trial</span>
                              <ul>
                                 <li>All the awesomeness</li>
                                 <li>Up to 15 projects</li>
                                 <li>Unlimited tasks</li>
                                 <li>Basic Dashboards</li>
                              </ul>
                              <a href="#" class="btn btn-theme">Select Plan <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-md-4">
                           <div class="block">
                              <h3>Complex</h3>
                              <span class="type">Companies</span>
                              <span class="price">$10</span>
                              <span class="time">after the 14 days free trial</span>
                              <ul>
                                 <li>All the awesomeness</li>
                                 <li>Up to 15 projects</li>
                                 <li>Unlimited tasks</li>
                                 <li>Basic Dashboards</li>
                              </ul>
                              <a href="#" class="btn btn-theme">Select Plan <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Pricing End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= App Download Section  =-=-=-=-=-=-= -->
         <div class="app-download-section parallex">
            <!-- app-download-section-wrapper -->
            <div class="app-download-section-wrapper">
               <!-- app-download-section-container -->
               <div class="app-download-section-container">
                  <!-- container -->
                  <div class="container">
                     <!-- row -->
                     <div class="row">
                        <!-- col-md-12 -->
                        <div class="col-md-12">
                           <!-- section-title -->
                           <div class="section-title"> <span>Download</span> <span><img src="images/logo-1.png" alt="Tiny Logo"></span> <span>Now</span> </div>
                           <!-- /section-title -->
                        </div>
                        <!-- /col-md-12 -->
                        <!-- col-md-4 -->
                        <div class="col-md-4">
                           <!-- Windows Store -->
                           <a href="#" title="Windows Store" class="btn app-download-button"> <span class="app-store-btn">
                           <i class="fa fa-windows"></i>
                           <span>
                           <span>Download From</span> <span>Windows Store </span> </span>
                           </span>
                           </a>
                           <!-- /Windows Store -->
                        </div>
                        <!-- /col-md-4 -->
                        <!-- col-md-4 -->
                        <div class="col-md-4">
                           <!-- Google Store -->
                           <a href="#" title="Google Store" class="btn app-download-button"> <span class="app-store-btn">
                           <i class="fa fa-android"></i>
                           <span>
                           <span>Download From</span> <span>Google Store </span> </span>
                           </span>
                           </a>
                           <!-- /Google Store -->
                        </div>
                        <!-- /col-md-4 -->
                        <!-- col-md-4 -->
                        <div class="col-md-4">
                           <!-- Apple Store -->
                           <a href="#" title="Windows Store" class="btn app-download-button"> <span class="app-store-btn">
                           <i class="fa fa-apple"></i>
                           <span>
                           <span>Download From</span> <span>Apple Store </span> </span>
                           </span>
                           </a>
                           <!-- /Apple Store -->
                        </div>
                        <!-- /col-md-4 -->
                     </div>
                     <!-- /row -->
                  </div>
                  <!-- /container -->
               </div>
               <!-- /app-download-section-container -->
            </div>
            <!-- /download-section-wrapper -->
         </div>
         <!-- =-=-=-=-=-=-= App Download Section End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Partners =-=-=-=-=-=-= -->
         <div class="happy-clients-area fix">
            <div class="container">
               <div class="row clients-space">
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div class="client-brand-list">
                        <div class="sigle-clients-brand">
                           <a href="#"><img src="images/clients/1.svg" alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                           <a href="#"><img src="images/clients/2.svg" alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                           <a href="#"><img src="images/clients/3.svg" alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                           <a href="#"><img src="images/clients/4.svg" alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                           <a href="#"><img src="images/clients/5.svg" alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                           <a href="#"><img src="images/clients/6.svg" alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                           <a href="#"><img src="images/clients/7.svg" alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                           <a href="#"><img src="images/clients/8.svg" alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                           <a href="#"><img src="images/clients/9.svg" alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                           <a href="#"><img src="images/clients/10.svg" alt=""></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- =-=-=-=-=-=-= Partners End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         @include('footer')
          <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- Main Content Area End -->

      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
       <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
       <script src="{{asset('js/jquery.min.js')}}"></script>
       <!-- Bootstrap Core Css  -->
       <script src="{{asset('js/bootstrap.min.js')}}"></script>
       <!-- Jquery Easing -->
       <script src="{{asset('js/easing.js')}}"></script>
       <!-- Menu Hover  -->
       <script src="{{asset('js/forest-megamenu.js')}}"></script>
       <!-- Jquery Appear Plugin -->
       <script src="{{asset('js/jquery.appear.min.js')}}"></script>
       <!-- Numbers Animation   -->
       <script src="{{asset('js/jquery.countTo.js')}}"></script>
       <!-- Jquery Smooth Scroll  -->
       <script src="{{asset('js/jquery.smoothscroll.js')}}"></script>
       <!-- Jquery Select Options  -->
       <script src="{{asset('js/select2.min.js')}}"></script>
       <!-- noUiSlider -->
       <script src="{{asset('js/nouislider.all.min.js')}}"></script>
       <!-- Carousel Slider  -->
       <script src="{{asset('js/carousel.min.js')}}"></script>
       <script src="{{asset('js/slide.js')}}"></script>
       <!-- Image Loaded  -->
       <script src="{{asset('js/imagesloaded.js')}}"></script>
       <script src="{{asset('js/isotope.min.js')}}"></script>
       <!-- CheckBoxes  -->
       <script src="{{asset('js/icheck.min.js')}}"></script>
       <!-- Jquery Migration  -->
       <script src="{{asset('js/jquery-migrate.min.js')}}"></script>
       <!-- Sticky Bar  -->
       <script src="{{asset('js/theia-sticky-sidebar.js')}}"></script>
       <!-- Style Switcher -->
       <script src="{{asset('js/color-switcher.js')}}"></script>
       <!-- Template Core JS -->
       <script src="{{asset('js/custom.js')}}"></script>
    </body>
</html>




