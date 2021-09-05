

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
      <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
      <link href="{{asset('skins/minimal/minimal.css')}}" rel="stylesheet">
      <!-- =-=-=-=-=-=-= For This Page Only =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{asset('css/dropzone.css')}}">
      <link href="{{asset('css/jquery.tagsinput.min.css')}}" rel="stylesheet">
      <!-- JavaScripts -->
      <script src="{{asset('js/modernizr.js')}}"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

      <![endif]-->
     <style>
     label {
        display: block;
        font: 1rem 'Fira Sans', sans-serif;
    }

    input,
    label {
        margin: .4rem 0;
    }</style>


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
                  <li><a href="/home">Home </a></li>
                  <li><a href="/create">New Product</a></li>

               </ul>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding  gray ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <div class="col-md-12">
                     <!-- end post-padding -->
                     <div class="post-ad-form extra-padding postdetails">
                        <div class="heading-panel">
                           <h3 class="main-title text-left">
                              Post Your Product
                           </h3>
                        </div>


                         <!-- php form -->
                        <form method="POST" action="{{route('store')}}" class="submit-form" enctype="multipart/form-data">
                            @csrf
                           <!-- Title  -->
                           <div class="row">
                              <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" >
                                 <label class="control-label" >Title <small></small></label>
                                 <input class="form-control" placeholder="..." type="text" name="title">
                              </div>
                           </div>
                            <!-- date  -->
                           <label for="start">Start date:</label>

                            <input type="date" id="start" name="date"
                                value="2020-07-22"
                                min="2020-12-01" max="2025-12-31">

                                <br>
                                <br>
                                <br>
                            <!-- time  -->
                                <label for="appt"> Time :</label>

                                <input type="time" id="appt" name="time"
                                    min="08:00" max="23:00" required>
                                <small> Temps d'enchaire de 8h à 22h</small>
                                <style>label {
                                    display: block;
                                    font: 1rem 'Fira Sans', sans-serif;
                                }

                                input,
                                label {
                                    margin: .4rem 0;
                                }</style>


                           <div class="row">
                              <!-- Category  -->
                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12" >
                                 <label class="control-label" >Category </label>
                                 <select class="category form-control" name="category">
                                    <option label="Select Option" ></option>
                                    <option value="Cars & Bikes">Cars & Bikes</option>
                                    <option value="Mobile Phones">Mobile Phones</option>
                                    <option value="Home Appliances">Home Appliances</option>
                                    <option value="Clothing">Clothing</option>
                                    <option value="Human Resource">Human Resource</option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Others">Others</option>

                                 </select>
                              </div>
                              <!-- Price  -->
                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12" >
                                 <label class="control-label"> Starting Price<small>Dinar only</small></label>
                                 <input class="form-control" placeholder="ex:100 " type="text" name="startingPrice">
                              </div>
                           </div>
                           <!-- end row -->


                            <div class="form-group">
                                <label for="image">Image </label>
                                <input id="file" type="file" name="image">

                            </div>





                           <!-- Ad Description  -->


                           <div class="row">
                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" >
                               <label class="control-label" >Description <small></small></label>
                               <input class="form-control" placeholder="Enter long description for your project" type="text" name="body">
                            </div>
                         </div>
                           <!-- end row -->

                             <!-- condition -->
                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12" >
                            <label class="control-label" >Condition </label>
                            <select class="category form-control" name="condition">
                               <option label="Select Concition" ></option>
                               <option value="New">New</option>
                               <option value="Used">Used</option>
                            </select>
                         </div>

                         <input  name="id_user" type="hidden" value="{{Auth::user()->id}}">
                           <!-- end row -->

                           <button class="btn btn-theme pull-right" type="submit">Publier</button>
                        </form>

                     </div>
                     <!-- end post-ad-form-->
                  </div>
                  <!-- end col -->
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
      <!-- For this Page Only -->
      <!-- Ckeditor  -->
      <script src="{{asset('js/ckeditor/ckeditor.js')}}" ></script>
      <!-- Ad Tags  -->
      <script src="{{asset('js/jquery.tagsinput.min.js')}}"></script>
      <!-- DROPZONE JS  -->
      <script src="{{asset('js/dropzone.js')}}" ></script>
      <script src="{{asset('js/form-dropzone.js')}}" ></script>
      <script type="text/javascript">
	   "use strict";

	   /*--------- Textarea Ck Editor --------*/
	     CKEDITOR.replace( 'editor1' );

	   /*--------- Ad Tags --------*/
		 $('#tags').tagsInput({
   			'width':'100%'
		 });

         /*--------- create remove function in dropzone --------*/
         Dropzone.autoDiscover = false;
         var acceptedFileTypes = "image/*"; //dropzone requires this param be a comma separated list
         var fileList = new Array;
         var i = 0;
         $("#dropzone").dropzone({
           addRemoveLinks: true,
           maxFiles: 5, //change limit as per your requirements
         acceptedFiles: '.jpeg,.jpg,.png,.gif',
           dictMaxFilesExceeded: "Maximum upload limit reached",
           acceptedFiles: acceptedFileTypes,
         url: "uploads",
           dictInvalidFileType: "upload only JPG/PNG",
           init: function () {
               // Hack: Add the dropzone class to the element
               $(this.element).addClass("dropzone");
           }
         });
		 (jQuery);
      </script>
      <!-- JS -->
   </body>
</html>
