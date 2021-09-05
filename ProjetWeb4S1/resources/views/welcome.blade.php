

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

      <!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
      <div class="colored-header">
         <!-- Top Bar -->
         <div class="header-top">
            <div class="container">
               <div class="row">
                  <!-- Header Top Left -->
                  <div class="header-top-left col-md-8 col-sm-6 col-xs-12 hidden-xs">
                     <ul class="listnone">
                        <li><a href="about.php"><i class="fa fa-heart-o" aria-hidden="true"></i> About</a></li>

                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe" aria-hidden="true"></i> Language <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="#">English</a></li>
                              <li><a href="#">Swedish</a></li>
                              <li><a href="#">Arabic</a></li>
                              <li><a href="#">Russian</a></li>
                              <li><a href="#">chinese</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <!-- Header Top Right Social -->
                  <div class="header-right col-md-4 col-sm-6 col-xs-12 ">
                     <div class="pull-right">
                        <ul class="listnone">
                           <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> {{ __('Login') }}</a></li>
                           <li><a href="{{ route('register') }}"><i class="fa fa-unlock" aria-hidden="true"></i> {{ __('Register') }}</a></li>

                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Top Bar End -->
         <!-- Navigation Menu -->
         <div class="clearfix"></div>
         <!-- menu start -->
           @include('navbar')
         <!-- menu end -->
      </div>
      <!-- Navigation Menu End -->
      <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
      <!-- Home Banner 1 -->
      <section class="main-search parallex ">

      <div class="container">
      <div class="row">
      <div class="col-md-12">
         <div class="main-search-title">
            <h1>Find Whatever Your Want?</h1>
            <p>Search <strong>267,241</strong> new ads - 83 added today</p>
         </div>

         <div class="search-section">
            <div id="form-panel">
               <ul class="list-unstyled search-options clearfix">
                  <li>
                     <select class="category form-control">
                        <option label="Select Option"></option>
                        <option value="0">Cars & Bikes</option>
                        <option value="1">Mobile Phones</option>
                        <option value="2">Home Appliances</option>
                        <option value="3">Clothing</option>
                        <option value="4">Human Resource</option>
                        <option value="5">Information Technology</option>
                        <option value="6">Marketing</option>
                        <option value="7">Others</option>
                        <option value="8">Sales</option>
                     </select>
                  </li>
                  <li>
                     <input type="text" placeholder="Used Laptops....">
                  </li>
                  <li>
                     <select class="category form-control">
                        <option label="Select Option"></option>
                        <option value="0">Cars & Bikes</option>
                        <option value="1">Mobile Phones</option>
                        <option value="2">Home Appliances</option>
                        <option value="3">Clothing</option>
                        <option value="4">Human Resource</option>
                        <option value="5">Information Technology</option>
                        <option value="6">Marketing</option>
                        <option value="7">Others</option>
                        <option value="8">Sales</option>
                     </select>
                  </li>
                  <li>
                     <button type="submit" class="btn btn-danger btn-lg btn-block">Search</button>
                  </li>
               </ul>
               <div class="hero-form-sub">
                  <strong class="hidden-sm-down">Popular Searches</strong>
                  <ul>
                     <li><a href="#">Properties</a></li>
                     <li><a href="#">Cars</a></li>
                     <li><a href="#">Jobs</a></li>
                     <li><a href="#">Events</a></li>
                     <li><a href="#">Food & Drink</a></li>
                     <li><a href="#">Travel</a></li>
                     <li><a href="#">Hotel</a></li>
                     <li><a href="#">Laptops</a></li>
                     <li><a href="#">parrots</a></li>
                     <li><a href="#">games</a></li>
                  </ul>
               </div>
            </div>
         </div>
         </div>
         </div>
       </div>

      </section>
      <!-- Home Banner 1 End -->
      <!-- Main Content Area -->
      <div class="main-content-area clearfix">
                <!-- =-=-=-=-=-=-= Popular Categories =-=-=-=-=-=-= -->
         <section class="custom-padding gray">
            <!-- Main Container -->

            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Popular Categories End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
         <section class="custom-padding">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <!-- Main Title -->
                        <h1>Browse <span class="heading-color"> Featured</span> Ads</h1>

                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div class="row">
                        <div class="featured-slider owl-carousel owl-theme">
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/car-3.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/1.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>Registration 2017</p>
                                          <p> 3.0 Diesel</p>
                                          <p> 230 HP</p>
                                          <p> Body Coupe</p>
                                          <p> 80 000 Miles</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">2017 Honda Civic EX</a></h3>
                                       <!-- Price -->
                                       <div class="price">$18,200 <span class="negotiable">(Negotiable)</span></div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/mob-2.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>Released 2015, November</p>
                                          <p> 5.5 inches</p>
                                          <p> 23 MP</p>
                                          <p>3GB RAM</p>
                                          <p> 3430mAh</p>
                                          <p> Android OS, v6.0</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Mobile Phones</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">Sony Xperia Z5 </a></h3>
                                       <!-- Price -->
                                       <div class="price">$250 <span class="negotiable">(Negotiable)</span></div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/house-5.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/5.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>Size: 800 Sq. Ft</p>
                                          <p> 2 Beds</p>
                                          <p> 1 Full Bath</p>
                                          <p> Single Family</p>
                                          <p> Built in 2015</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Real Estate</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">Cras ut eleifend quam</a></h3>
                                       <!-- Price -->
                                       <div class="price">$103,000 </div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/car-5.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/5.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>Registration 2017</p>
                                          <p> 3.0 Diesel</p>
                                          <p> 230 HP</p>
                                          <p> Body Coupe</p>
                                          <p> 80 000 Miles</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">Audi A7 3.0T quattro Prestige</a></h3>
                                       <!-- Price -->
                                       <div class="price">$57,988 </div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/lap-2.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/8.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>13.3-inch </p>
                                          <p> 1.6GHz dual-core</p>
                                          <p> Intel HD Graphics 6000</p>
                                          <p>8GB Ram </p>
                                          <p>LED-backlit glossy widescreen</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">Sony Vaio Pro 13 Ultrabook</a></h3>
                                       <!-- Price -->
                                       <div class="price">$595.99 </div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/spo-3.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/3.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>Size: 800 Sq. Ft</p>
                                          <p> 2 Beds</p>
                                          <p> 1 Full Bath</p>
                                          <p> Single Family</p>
                                          <p> Built in 2015</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">Vestibulum est nunc</a></h3>
                                       <!-- Price -->
                                       <button data-toggle="modal" data-target=".price-quote" class="btn btn-success">Email For Price</button>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/fur-3.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/3.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>5 Executive Tables</p>
                                          <p>7 Sitting Chairs </p>
                                          <p> 1 Sofa Set</p>
                                          <p>2 executive Cabins </p>
                                          <p> Double sofa 1</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Furniture And Toys</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html"> Pedding design bed set  </a></h3>
                                       <!-- Price -->
                                       <div class="price">$550 </div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/spo-5.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/5.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>Size: 800 Sq. Ft</p>
                                          <p> 2 Beds</p>
                                          <p> 1 Full Bath</p>
                                          <p> Single Family</p>
                                          <p> Built in 2015</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">Cras ut eleifend quam</a></h3>
                                       <!-- Price -->
                                       <div class="price">$103,000 </div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/car-4.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/4.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>Registration 2017</p>
                                          <p> 3.0 Diesel</p>
                                          <p> 230 HP</p>
                                          <p> Body Coupe</p>
                                          <p> 80 000 Miles</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">2007 BMW 3 Series 335i</a></h3>
                                       <!-- Price -->
                                       <div class="price">$9,995 </div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Featured Ads End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Trending Ads =-=-=-=-=-=-= -->




         <!-- =-=-=-=-=-=-= Trending Ads End =-=-=-=-=-=-= -->


         <!-- =-=-=-=-=-=-= Clients  =-=-=-=-=-=-= -->

         <!-- =-=-=-=-=-=-= Clients  End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         @include('footer')
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- Main Content Area End -->
      <!-- Post Ad Sticky ( boutton)-->

      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
       <!-- Product Preview Popup -->
      <div class="quick-view-modal modalopen" id="ad-preview" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-lg ad-modal">
            <button class="close close-btn popup-cls" aria-label="Close" data-dismiss="modal" type="button"> <i class="fa-times fa"></i> </button>
            <div class="modal-content single-product">
               <div class="diblock">
                  <div class="col-lg-7 col-sm-12 col-xs-12">
                     <div class="clearfix"></div>
                     <div class="flexslider single-page-slider">
                        <div class="flex-viewport">
                           <ul class="slides slide-main">
                              <li class=""><img alt="" src="images/single-page/1.jpg" title=""></li>
                              <li><img alt="" src="images/single-page/2.jpg" title=""></li>
                              <li class="flex-active-slide"><img alt="" src="images/single-page/3.jpg" title=""></li>
                              <li><img alt="" src="images/single-page/4.jpg" title=""></li>
                              <li><img alt="" src="images/single-page/5.jpg" title=""></li>
                              <li><img alt="" src="images/single-page/6.jpg" title=""></li>
                           </ul>
                        </div>
                     </div>
                     <div class="flexslider" id="carousels">
                        <div class="flex-viewport">
                           <ul class="slides slide-thumbnail">
                              <li><img alt="" draggable="false" src="images/single-page/1_thumb.jpg"></li>
                              <li><img alt="" draggable="false" src="images/single-page/2_thumb.jpg"></li>
                              <li class="flex-active-slide"><img alt="" draggable="false" src="images/single-page/3_thumb.jpg"> </li>
                              <li><img alt="" draggable="false" src="images/single-page/4_thumb.jpg"></li>
                              <li><img alt="" draggable="false" src="images/single-page/5_thumb.jpg"></li>
                              <li><img alt="" draggable="false" src="images/single-page/6_thumb.jpg"></li>
                              <!-- items mirrored twice, total of 12 -->
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class=" col-sm-12 col-lg-5 col-xs-12">
                     <div class="summary entry-summary">
                        <div class="ad-preview-details">
                           <a href="#">
                              <h4>Honda Civic Sports Edition 2017</h4>
                           </a>
                           <div class="overview-price">
                              <span>$36.000</span>
                           </div>
                           <div class="clearfix"></div>
                           <p>Tattooed fashion axe Blue Bottle butcher tilde. Pitchfork leggings meh Odd Future.Drinking vinegar. </p>
                           <ul class="car-info col-md-6 col-sm-6">
                              <li>
                                 <span>Fabrication:</span>
                                 <p>2013/2014</p>
                              </li>
                              <li>
                                 <span>Speed:</span>
                                 <p>160p/h</p>
                              </li>
                              <li>
                                 <span>Mileage:</span>
                                 <p>30.000km - 40.000km</p>
                              </li>
                              <li>
                                 <span>Fuel:</span>
                                 <p>Petrol</p>
                              </li>
                           </ul>
                           <ul class="ad-preview-info col-md-6 col-sm-6">
                              <li>
                                 <span>Color:</span>
                                 <p>Black</p>
                              </li>
                              <li>
                                 <span>Transmition:</span>
                                 <p>Automatic</p>
                              </li>
                              <li>
                                 <span>Dors:</span>
                                 <p>4/5</p>
                              </li>
                              <li>
                                 <span>Engine:</span>
                                 <p>2500cm3</p>
                              </li>
                           </ul>
                           <button class="btn btn-theme btn-block" type="submit">Contact Dealer</button>
                        </div>
                     </div>
                     <!-- .summary -->
                  </div>
               </div>
            </div>
         </div>
      </div>
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

