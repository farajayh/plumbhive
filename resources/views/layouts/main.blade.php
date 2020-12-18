<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name = "theme-color" content="black">
  <meta name = "msapplication-navbutton-color" content="black">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name = "apple-mobile-web-app-status-bar-style" content="black">

  <title>PlumbHive Official Forum</title>
  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />

  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="{{ asset('css/selectize.min.css') }}">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/media-queries.css') }}">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/switcher.css') }}" media="screen" />

</head>
<body id="dateFunction"><i id="home"></i>
  <header>

    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <a class="navbar-brand font-weight-bold text-lowercase" style="font-size:12px;" href="index.html"><span style="font-size:18px; color: rgb(224, 224, 234);"><img src="{{ asset('images/logo.png') }}" alt="logo" srcset="" style="height:30px; width:80px; background:#fff; border-radius:10%; padding:8px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
          aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
          <ul class="navbar-nav mr-auto move-me text-left font-weight-bold" style="font-size:14px;">
            <li class="nav-item">
                <a class="nav-link underLine" href="{{url('/')}}">Home</a>
            </li>
           <li class="nav-item dropdown dmenu">
              <a class="nav-link dropdown-toggle underLine" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Forum</a>
              <div class="dropdown-menu dropdown-menu-left sm-menu" aria-labelledby="navbarDropdownMenuLink-4">
                  <div class="container">
                      <div class="row">
                        <div class="col-md-6 col-6">
                            <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link active p-1 m-0" href="#">All Topics</a>
                              <a class="nav-link active p-1 m-0" href="#">Plumbing Marketing</a>
                              <a class="nav-link active p-1 m-0" href="#">Plumbing Tools</a>
                              <a class="nav-link active p-1 m-0" href="#">Plumbing Engineers</a>
                              <a class="nav-link active p-1 m-0" href="#">Fixing and Corrections</a>
                            </li>
                          </ul>
                          </div>
                          <!-- /.col-md-4  -->
                          <div class="col-md-6 col-6">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active p-1 m-0" href="#">Blogs</a>
                                    <a class="nav-link active p-1 m-0" href="#">Fixing and Corrections</a>
                                    <a class="nav-link active p-1 m-0" href="#">Plumbing Engineers</a>
                                    <a class="nav-link active p-1 m-0" href="#">Latest Materials</a>
                                    <a class="nav-link active p-1 m-0" href="#">Active</a>
                                  </li>
                          </ul>
                          </div>

                      </div>
                    </div>
              </div>
            </li>
            <li class="nav-item dropdown dmenu">
              <a class="nav-link dropdown-toggle underLine" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Marketplace</a>

              <div class="dropdown-menu dropdown-menu-left sm-menu" aria-labelledby="navbarDropdownMenuLink-4">
                  <div class="container">
                      <div class="row">

                            <!-- /.col-md-4  -->
                            <div class="col-md-6 col-6">
                              <ul class="nav flex-column">
                                  <li class="nav-item">
                                      <a class="nav-link active p-1 m-0" href="#">Blogs</a>
                                      <a class="nav-link active p-1 m-0" href="#">Fixing and Corrections</a>
                                      <a class="nav-link active p-1 m-0" href="#">Plumbing Engineers</a>
                                      <a class="nav-link active p-1 m-0" href="#">Latest Materials</a>
                                      <a class="nav-link active p-1 m-0" href="#">Active</a>
                                    </li>
                            </ul>
                            </div>
                            <div class="col-md-6 col-6">
                                <ul class="nav flex-column">
                                <li class="nav-item">
                                  <a class="nav-link active p-1 m-0" href="#">All Topics</a>
                                  <a class="nav-link active p-1 m-0" href="#">Plumbing Marketing</a>
                                  <a class="nav-link active p-1 m-0" href="#">Plumbing Tools</a>
                                  <a class="nav-link active p-1 m-0" href="#">Plumbing Engineers</a>
                                  <a class="nav-link active p-1 m-0" href="#">Fixing and Corrections</a>
                                </li>
                              </ul>
                              </div>

                        </div>
                    </div>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link underLine" href="plumbhive/top-feed.html">Top Feeds</a>
            </li>
            <li class="nav-item">
                <a class="nav-link underLine" href="{{ url('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link underLine" href="{{ url('contact') }}">Contact</a>
            </li>
          </ul>

          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>

          <ul class="navbar-nav nav-flex-icons">
          @guest
            <li class="nav-item">
              <a class="nav-link underLine" href="{{ route('login') }}">Login</a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link underLine" href="{{ route('register') }}">Sign Up</a>
            </li>
          @endif
          @else
          <li class="nav-item">
                <a class="nav-link underLine" href="{{ url('dashboard') }}">Dashboard</a>
            </li>
          <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle underLine" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
            <div class="dropdown-menu dropdown-menu-right sm-menu" aria-labelledby="navbarDropdownMenuLink-4">
                <div class="container">
                    <div class="row">
                      <div class="col-md-6 col-6">
                          <ul class="nav flex-column">
                          <li class="nav-item">
                            <a class="nav-link active p-1 m-0" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                            >{{ __('Logout') }}</a>
                          </li>
                        </ul>
                        </div>
                    </div>
                  </div>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
            </div>
          </li>
          @endguest
          </ul>
        </div>
      </nav>
      <!-- Navbar End -->
</header>

<main style="background:rgb(221, 218, 218)">
    @yield('content')
</main>
<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="content">
                    <form>
                        <h4>GET WEEKLY UPDATE FROM OUR COMMUNITY</h4>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button class="btn p-2 my-0" type="submit">Subscribe</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <section style="background-color:#f2f2f2;"><i id="contact"></i>
        <div class="container">
            <div style="height:30px;"></div>
            <div class="row">
              <div class="col-md-12 mx-auto">
                  <div class="row ml-1 ml-md-0">
                    <div class="col-md-3 col-7 mb-3">
                        <div style="text-align:left" class="footer-details">
                        <h5 class="font-weight-bold">Plumbhive</h5> <hr>
                           <p>
                              Plumbhive is the world's largest Internet Plumbing Community and Marketplace.
                           </p>
                        </div>
                    </div>

                    <div class="col-md-3 col-5 mb-3">
                        <div style="text-align:left" class="footer-details">
                        <h5 class="font-weight-bold">About Us</h5> <hr>
                          <a href="{{ url('about') }}">Who we are</a> <br>
                          <a href="{{url('contact')}}">Contact Us</a><br>
                          <a href="index.html">Our Sites</a><br>
                          <a href="in dex.html">In t he News</a><br>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 mb-3">
                        <div style="text-align:left" class="footer-details">
                        <h5 class="font-weight-bold">More Info</h5> <hr>
                          <a href="plumbhive/terms.html">Terms and Condition</a> <br>
                          <a href="plumbhive/privacy.html">Privacy Policy</a><br>
                          <a href="plumbhive/offer.html">Special Offer</a><br>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 mb-3">
                        <div style="text-align:left" class="footer-details">
                        <h5 class="font-weight-bold">Related Companies</h5> <hr>
                          <a href="#!">Freelancer.com</a> <br>
                          <a href="#!">Escrow.com</a><br>
                          <a href="#!">Start.com</a><br>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
        <div style="height:30px;"></div>
    </section>

    <section class="black footer-2">
      <div class="row mx-0">
        <div class="col-md-12">
            <div class="footer">
                <div class="container">
                  <!-- <img src="/stylesheets/images/best/pay.png" class="img-fluid mt-2" alt=""/> -->
                  <ul class="footer_nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="{{ url('about') }}">About Us</a></li>
                    <li><a href="{{url('contact')}}">Contact Us</a></li>
                    <li><a href="plumbhive/terms.html">Terms</a></li>
                    <li><a href="pl umbhive/privac y.html">Privacy</a></li>
                  </ul>
                </div>
              </div>
            <p class="text-center font-weight-bold mb-4" style="font-size:10px;">Copyright &copy <span id="year"></span>, <i class="fa fa-heart red-text"></i> by Plumbhive</p>
        </div>
      </div>
    </section>
  </footer>


</body>

<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>


 <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
 
 <!-- start-smoth-scrolling -->
<script src="{{ asset('js/move-top.js') }}"></script>
 <script src="{{ asset('js/scripts.js') }}"></script>
 <script src="{{ asset('js/custom.js') }}"></script>
 <script src="{{ asset('js/scrollReveal.js') }}"></script>

<script src="/js/selectize.min.js"></script>
<script>
    $(function () {
        $('#tag').selectize();
    })
</script>
@yield('js')
<script>

    jQuery(document).ready(function ($) {
      $(".scrolled").click(function (event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 900);
      });
    });

     new WOW().init();

   $(document).ready(function () {

     var defaults = {
       containerID: 'toTop', // fading element id
       containerHoverID: 'toTopHover', // fading element hover id
       scrollSpeed: 1200,
       easingType: 'linear'
     };
     $().UItoTop({
       easingType: 'easeOutQuart'
     });

   });

    $('.navicon').on('click', function (e) {
      e.preventDefault();
      $(this).toggleClass('navicon--active');
      $('.toggle').toggleClass('toggle--active');
    });

   $(".goDown").hover(function () {
       $(this).toggleClass("animated tada");
     });
</script>
</html>