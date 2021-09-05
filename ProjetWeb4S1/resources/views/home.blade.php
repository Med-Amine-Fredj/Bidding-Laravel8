

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
     <!-- =-=-=-=-=-=-= Color Switcher =-=-=-=-=-=-= -->

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
      <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->

      <!-- Small Breadcrumb -->
      <div class="small-breadcrumb">
         <div class="container">
            <div class=" breadcrumb-link">
               <ul>
                  <li><a  class="active" href="/home"><strong>  Acceuil </strong> </a></li>

               </ul>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding error-page pattern-bgs gray ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Middle Content Area -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div class="row">
                        <!-- Blog Archive -->
                        <div class="posts-masonry">
                           <!-- Blog Post-->
                           @foreach ($produits as $p)


                           <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="blog-post">
                                 <div class="post-img">
                                    <a href="produits/{{$p->id}}" > <img class="img-responsive" alt="" src="/imageProduit/{{$p->image}}" style="width: 500px ; height:300px"> </a>
                                 </div>
                                 <div  name="produit_id" type="hidden" value="{{$p->id}}"> </div>
                                 <div class="post-info" style="color: orangered"> <strong>{{$p->date}}</strong>  <strong> At :{{$p->time}}</strong> </div>
                                <h3 class="post-title" style="color: orangered" > <a href="produits/{{$p->id}}">{{$p->title}}</a> </h3>
                                 <p class="post-excerpt"> {{$p->body}} </p>
                              </div>
                           </div>
                           @endforeach






                        </div>
                        <div class="col-md-12 col-xs-12 col-sm-12">
                           <ul class="pagination pagination-lg">
                              <li> <a href="#"> <i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                              <li  class="active"> <a href="#">1</a> </li>
                              <li> <a href="#">2</a> </li>
                              <li> <a href="#">3</a> </li>
                              <li> <a href="#">4</a> </li>
                              <li><a href="#"> <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                           </ul>
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
      @include('boutton')
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

