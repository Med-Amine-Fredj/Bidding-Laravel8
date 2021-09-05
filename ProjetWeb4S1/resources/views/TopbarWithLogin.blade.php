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

                   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-profile-male" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                         <li><a href="/profile"> Profil</a></li>
                         <li><a href="/mesProduits">Mes produits</a></li>


                         <li><a href="{{ route('logout') }}">Deconnexion</a></li>
                      </ul>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </div>
