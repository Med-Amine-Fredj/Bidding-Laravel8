

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
      <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-=  -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
      <div class="page-header-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="header-page">
                     <h1>Get In Touch</h1>
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
                  <li><a href="home">Home </a></li>

                  <li><a class="active" href="contact">Contact</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 no-padding commentForm">
                     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="">
                           <h2 >Send a Message</h2>
                           <form method="post"  action="#">
                              <div class="row">
                                 <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                       <input type="text" placeholder="Name" id="name" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                       <input type="email" placeholder="Email" id="email" name="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                       <input type="text" placeholder="Subject" id="subject" name="subject" class="form-control" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                       <textarea cols="12" rows="7" placeholder="Message..." id="message" name="message" class="form-control" required></textarea>
                                    </div>
                                 </div>
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn btn-theme" type="submit">Send Message</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="contactInfo">
                           <h2>Contact Info</h2>
                           <div class="singleContadds">
                              <i class="fa fa-map-marker"></i>
                              <p>
                                 Model Town Link Road Lahore, 60 Street. Pakistan 54770
                              </p>
                           </div>
                           <div class="singleContadds phone">
                              <i class="fa fa-phone"></i>
                              <p>
                                 0123 456 78 90 - <span>Office</span>
                              </p>
                              <p>
                                 0123 456 78 90 - <span>Mobile</span>
                              </p>
                           </div>
                           <div class="singleContadds">
                              <i class="fa fa-envelope"></i>
                              <a href="mailto:contact@scriptsbundle.com">contact@scriptsbundle.com</a>
                              <a href="mailto:contact@scriptsbundle.com">contact@scriptsbundle.com</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         @include('footer')
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- Main Content Area End -->
      <!-- Post Ad Sticky -->
      <a href="#" class="sticky-post-button hidden-xs">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
         <h4>SELL</h4>
      </a>
      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
      <!-- Back To Top -->
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

