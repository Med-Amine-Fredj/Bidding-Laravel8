

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
         @include('TopbarWithLogin')
         <!-- Top Bar End -->
         <!-- Navigation Menu -->
         @include('navbar')
      </div>
      <!-- Navigation Menu End -->
      <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->

      <!-- Small Breadcrumb -->
      <div class="small-breadcrumb">
         <div class="container">
            <div class=" breadcrumb-link">
               <ul>

                  <li><a class="active" href="#"><strong>ENCHERE</strong> </a></li>
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
                  <div class="col-md-8 col-xs-12 col-sm-12">
                     <div class="blog-detial">
                        <!-- Blog Archive -->
                        <div class="blog-post">
                           <div class="post-img">
                              <a href="#"> <img class="img-responsive large-img" alt="" src="/imageProduit/{{$produit->image}}"> </a>
                           </div>
                           <input id="idprod"  type="hidden" value="{{$produit->id}}">
                           <input type="hidden" id="id_user" value="{{ Auth::user()->id }}">
                           <input class="" type="hidden" id="pseudo_user" value="{{Auth::user()->name}}">

                           <input type="hidden" id="date_deb_modif" value=" {{$produit->date}} {{$produit->time}}">

                           <div class="post-info"> <h3>Date prevu pour l'enchere : {{$produit->date}} à {{$produit->time}}</h3>  </div>
                           <br>

                           <h3 class="post-title"> <a href="#"> {{$produit->title}} </a> </h3>
                           <div class="post-excerpt">

                              <blockquote>
                                 <p><strong>Description :{{$produit->body}}</strong>
                                 </p>
                              </blockquote>
                              <div class="widget">
                                <div class="widget-heading">
                                   <h4 class="panel-title"><a>Condition  :{{$produit->condition}} </a></h4>
                                </div>
                                <div class="widget-content recent-ads">





                                </div>
                             </div>

                              <div class="clearfix"></div>


                              <div class="clearfix"></div>


                              <div class="blog-section">
                                 <div class="blog-heading">
                                    <h2>Comments </h2>
                                    <hr>
                                 </div>
                                 <ol class="comment-list">
                                    <!-- comment-list    -->
                                    @foreach ($comments as $c)
                                    <!-- comment -->
                                    <li class="comment">
                                       <div class="comment-info">
                                          <img class="pull-left hidden-xs img-circle" src="/user_image/{{ Auth::user()->profile_image }}" alt="author">
                                          <div class="author-desc">
                                             <div class="author-title">
                                             <strong>{{$c->name}}</strong>
                                                <ul class="list-inline pull-right">
                                                   <li><a href="#">{{$c->created_at}}</a>
                                                   </li>

                                                <form name="x" action="/comments/delete/{{$c->id}}"  method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit"  value="Supprimer" style="background: red">
                                                    </form>


                                                </ul>
                                             </div>
                                            <p>{{$c->comment}}</p>
                                          </div>
                                       </div>
                                       <!-- .comment-info -->
                                    </li>
                                    <!-- .comment -->
                                    @endforeach
                                 </ol>
                              </div>
                              <div class="clearfix"></div>
                              <div class="blog-section">
                                 <div class="blog-heading">
                                    <h2>leave your comment </h2>
                                    <hr>
                                 </div>
                                 <div class="commentform">
                                    <form action="{{action ('CommentController@store')}}" method="POST">
                                        @csrf

                                       <div class="row">

                                                <input type="hidden" class="form-control" placeholder="" name="produit_id" required value="{{$produit->id}}">
                                                <input type="hidden" class="form-control" placeholder="" name="email" required value="{{Auth::user()->email}}">
                                                <input type="hidden" class="form-control" placeholder="" name="name" required value="{{Auth::user()->name}}">

                                          <div class="col-md-12 col-sm-12">
                                             <div class="form-group">
                                                <label>Comment <span class="required">*</span>
                                                </label>
                                                <textarea class="form-control" placeholder="" rows="8" cols="6" name='comment'  ></textarea>
                                             </div>
                                          </div>
                                          <div class="col-md-12 col-sm-12 margin-top-20 clearfix">
                                             <button type="submit"  class="btn btn-theme">Post Your Comment</button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Blog Grid -->
                     </div>
                  </div>
                  <!-- Right Sidebar -->
                  <div class="col-md-4 col-xs-12 col-sm-12">
                     <!-- Sidebar Widgets -->
                     <div class="blog-sidebar">
                        <!-- Categories -->
                        <div class="widget">
                           <div class="widget-heading">

              <div class="divider divider-default"></div>
                <div class="dec" style="border: 5px  #D14520; background-color: rgb(248, 102, 58);text-align: center;font-size: 20px;">
                 <span class="" id="divCounter1" style="color: white">00</span>
                <span class="" id="" style="color: white">:</span>
                 <span class="" id="divCounter2" style="color: white" >00</span>
              </div>
                           </div>

                           <div class="divider divider-default">

                           <div class="col-xs-12">

                           <div class="col-xs-3">
                           <h2  style="color:#D14520; ">Prix: </h2>
                           </div>
                           <div class="col-xs-2">
                           <h2 class="prix_produit" id="prix_final_prod" style="color:#e7552c; ">{{$produit->startingPrice}}</h2>
                           </div>
                           <div class="col-xs-7">
                           <label style="color:#D14520; " >DT</label>
                           </div>
                           </div>

                           <div class="col-xs-12">
                           <h4 id="pseudo_user2" style="color:#000000;"></h4>
                           </div>
                           <div class="col-xs-12">
                           <button style="color:#D14520; "class="prix button button-sm button-secondary" data-value="1" > + 1 dt</button>
                           <button  style="color:#D14520; "class="prix button button-sm button-secondary" data-value="2" > + 2 dt</button>
                           </div>

                           </div>

                        </div>
                        <!-- Latest News -->





                     </div>
                     <!-- Sidebar Widgets End -->
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         <footer>
           @include('footer')
         </footer>
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
<script>
    $(".prix").hide();

  var idproduct =$("#idprod").val()
  var new_price=+ $(".prix_produit").text()
  var pseudo = $("#pseudo_user").val()


//*********** j'appelle function counter selon date

var date_lan_prod=$("#date_deb_modif").val().match(/(\d+)-(\d+)-(\d+) (\d+):(\d+):(\d+)/);
    year= date_lan_prod[1]
    month = date_lan_prod[2]
    day= date_lan_prod[3]
    hour= date_lan_prod[4]
    minutes= date_lan_prod[5]
    seconds= date_lan_prod[6]
var now = new Date();
var startcount = new Date(year, now.getMonth(), day, hour, minutes, seconds, 0) - now;
var counter =  120 + Math.floor(startcount / 1000);
var mn = Math.floor(counter / 60);
var sec = counter - (mn *60);

/**** y5adem fi conter kol sec */
  var interval2 = setInterval(function() {


    var left = 120 + Math.floor(startcount / 1000);
      if(left > 0 ){
         $(".prix").show();

      counter--;
      // console.log("mn:", mn, "sec:", sec);
      mn = Math.floor(counter / 60);
      sec = counter - (mn *60);
       //  console.log(counter);
      if(mn < 10) mn = '0'+mn;
      if(sec < 10) sec = '0'+sec;
      if( counter < 120 ){
        $("#divCounter1").html(mn)
        $("#divCounter2").html(sec)


        if (counter == 0) {
         $(".prix").prop("disabled", true);
          clearInterval(interval2);
          $.ajax({
          type: "POST",
          url: '/api/setEndProduct',
          data: {
              idproduct: idproduct,
          },
            dataType: "json",
            success: function (result) {
              console.log(result)

            },
            error: function(){
                alert('error!');
              }
            });
          }
       }

      }

      else{

      }

  }, 1000);
</script>


<script>
/***on click*/
    $(document).on('click', ".prix", function () {
        var date = $("#divCounter1").html() + ":" + $("#divCounter2").html()
        var id_user = $("#id_user").val()
        var pseudo = $("#pseudo_user").val()
        var idproduct =$("#idprod").val()
        var new_price=+ $(".prix_produit").text() + + $(this).attr("data-value");


        $.ajax({
            type: "POST",
            url: '/api/postenchere',

                data: {
                new_price:new_price,
                idproduct: idproduct,
                id_user: id_user,
                date: date,

                pseudo:pseudo,
            },
            dataType: "json",
            success: function (result) {
               $(".prix_produit").text(new_price)
               $("#pseudo_user2").text(pseudo)
            console.log(result)

            },
            error: function(){
                alert('error!');
              }
        });
    })




</script>

