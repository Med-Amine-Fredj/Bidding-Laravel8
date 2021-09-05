@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
         <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="description" content="">
        <meta name="author" content="ScriptsBundle">
        <title>AdForest | Largest Classifieds Portal</title>
        <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
        <link rel="icon" href="{{asset('images/favicon.ico" type="image/x-icon')}}" />
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
        <link rel="stylesheet" href="{asset('css/et-line-fonts.css')}}" type="text/css">
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
        <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.css')}}">{{asset('css/forest-menu.css')}}
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
        <div class="header-top">
           <div class="container">
              <div class="row">
                 <!-- Header Top Left -->
                 <div class="header-top-left col-md-8 col-sm-6 col-xs-12 hidden-xs">
                    <ul class="listnone">
                       <li><a href="about.html"><i class="fa fa-heart-o" aria-hidden="true"></i> About</a></li>
                       <li><a href="faqs.html"><i class="fa fa-folder-open-o" aria-hidden="true"></i> FAQS</a></li>
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
                          <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Log in</a></li>
                          <li><a href="{{ route('register') }}"><i class="fa fa-unlock" aria-hidden="true"></i> Register</a></li>

                       </ul>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- Top Bar End -->

      <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->

      <!-- Small Breadcrumb -->
      <div class="small-breadcrumb">
         <div class="container">
            <div class=" breadcrumb-link">
               <ul>

                  <li><a class="active" href="#">INSCRIPTION</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding error-page pattern-bg ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Middle Content Area -->

                     <!--  Form -->
                     <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="numtel" class="col-md-4 col-form-label text-md-right">{{ __('NumTel') }}</label>

                                <div class="col-md-6">
                                    <input id="numtel" type="text" class="form-control @error('numtel') is-invalid @enderror" name="numtel" value="{{ old('numtel') }}" required autocomplete="numtel" autofocus>

                                    @error('numtel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

                                <div class="col-md-6">
                                    <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>

                                    @error('ville')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="profile_image" class="col-md-4 col-form-label text-md-right">{{ __('Profile Image') }} </label>

                                <div class="col-md-6">
                                    <input  type="file" class="form-control @error('profile_image') is-invalid @enderror" name="profile_image" >

                                    @error('profile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>






                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>



                  <!-- Middle Content Area  End -->
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
      <!-- Forget Password -->
      <div class="custom-modal">
         <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header rte">
                     <h2 class="modal-title">Forgot Your Password ?</h2>
                  </div>
                  <form>
                     <div class="modal-body">
                        <div class="form-group">
                           <label>Email</label>
                           <input placeholder="Enter Your Email Adress" class="form-control" type="email">
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default">Reset My Account</button>
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

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

@endsection
