

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
      <div class="clearfix"> </div>
      </div>
      <!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
      <div class="colored-header">
         <!-- Top Bar -->

@include('TopbarWithLogin')


         <!-- Top Bar End -->
         <!-- Navigation Menu -->
         <div class="clearfix"></div>
         <!-- menu start -->
           @include('navbar')
         <!-- menu end -->
      </div>
      <!-- Navigation Menu End -->
      <!-- =-=-=-=-=-=-= Transparent Header End =-=-=-=-=-=-= -->
      <div class="small-breadcrumb">
        <div class="container">
           <div class=" breadcrumb-link">
              <ul>
                 <li><a class="active" href="">Mes Produits  </a></li>

              </ul>
           </div>
        </div>
     </div>
     <br>
     <br>
     <br>
      <!-- Main Content Area -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Home Tabs =-=-=-=-=-=-= -->
         <section class="home-tabs">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="tabs-container">

                        <!-- Tab Content -->
                        <div class="tab-content">
                           <!-- tab content  -->
                           <div id="cars" class=" row tab-pane active in fade">
                            @foreach ($produits as $p)



                              <div class="col-md-4 col-xs-12 col-sm-6" >
                                 <!-- Ad Box -->
                                 <div class="category-grid-box" >
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="/imageProduit/{{$p->image}}" style="width: 500px ; height:300px">
                                       <!-- Ad Status -->
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="produit/{{$p->id}}" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>{{$p->date}}</p>
                                          <p> {{$p->time}}</p>
                                          <p> {{$p->condition}}</p>

                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">{{$p->category}}</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">{{$p->title}} </a></h3>
                                       <!-- Price -->
                                       <div class="price">{{$p->startingPrice}} </div>
                                    </div>
                                    <!-- Addition Info -->

                                 </div>

                              </div>
                              @endforeach
                           </div>

                        </div>
                        <br>
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <ul class="pagination pagination-lg">
                               <li> <a href="#"> <i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                               <li class="active"> <a href="#">1</a> </li>
                               <li > <a href="#">2</a> </li>
                               <li> <a href="#">3</a> </li>
                               <li> <a href="#">4</a> </li>
                               <li><a href="#"> <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                            </ul>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
<br>
<br>
<br>
<br>
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         @include('footer')
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>

      @include('boutton')
      <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->

      <!-- / Product Preview Popup -->
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

