<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ANS</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout product_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('images/loading.gif')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <ul class="sociel_link">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <p>long established fact that a reader will be </p>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="{{asset('images/logopom.png')}}" alt="logo"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li > <a href="{{url('')}}">Home</a> </li>
                              <li> <a href="{{url('About')}}">About</a> </li>
                              <li class="active"> <a href="{{url('Product')}}">product</a> </li>
                              @if (Auth::user()->role == 'member')
                                <li> <a href="{{url('Transaksi')}}">Transaksi</a> </li>
                                <li> <a href="{{url('Daftarkendaraan')}}">Kendaraan</a> </li>
                              @endif


                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li>
                              <a class="buy" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <!-- <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li> -->
                          @endif
                      @else
                          <li class="dropdown" style="margin-top:20px; font-family: sans-serif; font-weight:bold;">
                              <a style="text-transform: uppercase;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->role == 'member')
                                <a class="dropdown-item">
                                  @if (@$member->point_member == null)
                                    {{'point :   0' }}
                                  @else
                                    {{'point : ' . @$member->point_member}}
                                  @endif
                                </a>
                                @endif
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
       <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>our product</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
      <!-- our product -->
      <div class="product">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">

                     <span>Bahan bakar terpercaya untuk kendaraan kesayangan anda.</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="product-bg">
         <div class="product-bg-white">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                 @if (Auth::user()->role == 'staff')
                     <div class="product-box">
                       <i><img src="{{asset('icon/pertamax.png')}}"/></i>
                       <h3>Pertamax</h3>
                       <a href="{{url('Purchasepertamax')}}">
                       <span><sup>Rp </sup>9,000 / <font style="font-size:15px">liter</font></span>
                     </a>
                     </div>
                 @else
                   <div class="product-box">
                     <i><img src="{{asset('icon/pertamax.png')}}"/></i>
                     <h3>Pertamax</h3>
                     <span><sup>Rp </sup>9,000 / <font style="font-size:15px">liter</font></span>
                   </div>
                 @endif
               </div>

               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                 @if (Auth::user()->role == 'staff')
                   <div class="product-box">
                     <i><img src="{{asset('icon/pertamax_turbo.png')}}"/></i>
                     <h3>Pertamax Turbo</h3>
                     <a href="{{url('Purchasepertamaxturbo')}}">
                     <span><sup>Rp </sup>9,850 / <font style="font-size:15px">liter</font></span>
                   </a>
                   </div>
                @else
                  <div class="product-box">
                    <i><img src="{{asset('icon/pertamax_turbo.png')}}"/></i>
                    <h3>Pertamax Turbo</h3>
                    <span><sup>Rp </sup>9,850 / <font style="font-size:15px">liter</font></span>
                  </div>
              @endif
            </div>

                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                 @if (Auth::user()->role == 'staff')
                     <div class="product-box">
                       <i><img src="{{asset('icon/pertalite.png')}}"/></i>
                       <h3>Pertalite</h3>
                       <a href="{{url('Purchasepertalite')}}">
                       <span><sup>Rp </sup>7,650 / <font style="font-size:15px">liter</font></span>
                     </a>
                     </div>
              @else
                  <div class="product-box">
                    <i><img src="{{asset('icon/pertalite.png')}}"/></i>
                    <h3>Pertalite</h3>
                    <span><sup>Rp </sup>7,650 / <font style="font-size:15px">liter</font></span>
                  </div>
              @endif
            </div>

               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                 @if (Auth::user()->role == 'staff')
                   <div class="product-box">
                     <i><img src="{{asset('icon/pertadex.png')}}"/></i>
                     <h3>Solar</h3>
                     <a href="{{url('Purchasesolar')}}">
                     <span><sup>Rp </sup>9,400 / <font style="font-size:15px">liter</font></span>
                   </a>
                   </div>
               @else
                 <div class="product-box">
                   <i><img src="{{asset('icon/pertadex.png')}}"/></i>
                   <h3>Solar</h3>
                   <span><sup>Rp </sup>9,400 / <font style="font-size:15px">liter</font></span>
                 </div>
                 @endif
               </div>
               </div>
            </div>
         </div>

      <!--  footer -->
      <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <ul class="sociel">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                  </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>Developed By</h3>
                     <ul class="lik">
                         <li> <a href="#">Edwin Desemsky</a></li>
                         <li> <a href="#">Adhitya Bathara</a></li>
                         <li> <a href="#">Steven Peter</a></li>
                     </ul>
                  </div>
               </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>ADDITIONAL LINKS</h3>
                     <ul class="lik">
                         <li> <a href="{{url('About')}}">About us</a></li>
                     </ul>
                  </div>
               </div>
                 <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>service</h3>
                      <ul class="lik">
                    <li> <a href="#"> Data recovery</a></li>
                         <li> <a href="#">Computer repair</a></li>
                         <li> <a href="#">Mobile service</a></li>
                         <li> <a href="#">Network solutions</a></li>
                          <li> <a href="#">Technical support</a></li>
                  </div>
               </div> -->
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>About lighten</h3>
                     <span>Tincidunt elit magnis nulla facilisis. Dolor Sapien nunc amet ultrices, </span>
                  </div>
               </div>
            </div>
         </div>
            <div class="copyright">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>

      </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });

         $(".zoom").hover(function(){

         $(this).addClass('transition');
         }, function(){

         $(this).removeClass('transition');
         });
         });

      </script>
   </body>
</html>
