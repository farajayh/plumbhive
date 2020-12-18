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

  <link rel="stylesheet" href="css/style.css">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
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
                <a class="nav-link underLine" href="index.html">Home</a>
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
                            @foreach(\App\Tag::all() as $tag)
                            <a class="nav-link active p-1 m-0" href="#">{{ $tag->name }}</a>
                            @endforeach
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
                <a class="nav-link underLine" href="plumbhive/about.html">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link underLine" href="plumbhive/contact.html">Contact</a>
            </li>
          </ul>

          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>

          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link underLine" data-toggle="modal" data-target="#login">Login</a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link underLine" href="{{ route('register') }}">Sign Up</a>
            </li>
          @endif
          </ul>
        </div>
      </nav>
      <!-- Navbar End -->
</header>
<section>
  <!-- Central Modal Small -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100" id="myModalLabel">Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- Default form login -->
              <form class="text-center p-2">
                  <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
                  <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
                  <div class="">
                      <a class="btn white-text sendbtn" id="" style="background: rgb(90, 90, 145);">
                          <span class="h5 font-weight-bold">Login</span>
                      </a>
                  </div><br>
                  <small><a href="../plumbhive/forget.html" class="red-text">Forgot Password?</a></small><br>
                  <small>Don't have an account? <a href="{{ route('register') }}">Sign Up Now</a></small>
              </form>
            <!-- Default form login -->
        </div>

      </div>
    </div>
  </div>
  <!-- Central Modal Small -->
</section>
<main style="background:rgb(221, 218, 218)">
    <div style="height:80px;"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 white mb-4 mx-md-0 mx-2" style=" border-radius: 10px;">
                    <!-- Search Button -->
                    <div class="row my-4">
                        <div class="col-12 col-md-12">
                            <form class="card card-sm p-0 m-0">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fa fa-search h4 text-body mr-2"></i>
                                    </div>
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Search End Here -->

                    <div class="container">
                      <div class="row">
                        <div class="col-md-7 col-5 mb-3">
                            <h5 class="mt-0 font-weight-bold desp" style="color:purple">ALL TOPICS</h5>
                        </div>
                        <div class="col-md-1 col-2 mb-3">
                          <h5 class="mt-0 font-weight-bold desp"><a href="#!" style="color:purple; border-bottom:3px solid #b00; padding-bottom: 5px;">FEEDS</a></h5>
                      </div>
                      <div class="col-md-3 col-5 mb-3">
                          <h5 class="mt-0 font-weight-bold desp"><a href="#!" style="color:purple">MOST RECENTS</a></h5>
                      </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="media mb-2">
                                <div class="media-body border border-light rounded p-2">
                                    <h5 class="mt-0 font-weight-bold"><a href="plumbhive/forum.html" class="head-topic">Infographic - psychological pricing tricks you need to know</a></h5>
                                  <p class="p-0 m-0" style="font-size:10px;"><a href="" style="font-weight:bold; color: #004483;">Adekunle</a> 5 hours ago in <a href="" style="font-weight:bold; color: #004483;">Plumbing Marketing</a></p>
                                  <p class="p-0 mb-1 contentLength">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at, Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,</p>
                                    <a href=""><p class="p-0 m-0 font-weight-bold" style="font-size:12px; color: #004483">5 Replies</p></a>
                                </div>
                            </div>
                            <div class="media mb-2">
                                <div class="media-body border border-light rounded p-2">
                                    <h5 class="mt-0 font-weight-bold"><a href="plumbhive/forum.html" class="head-topic">Facebook acquires GIPHY</a></h5>
                                  <p class="p-0 m-0" style="font-size:10px;"><a href="" style="font-weight:bold; color: #004483;">Adekunle</a> 5 hours ago in <a href="" style="font-weight:bold; color: #004483;">Latest Materials</a></p>
                                  <p class="p-0 mb-1 contentLength">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at, Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,</p>
                                    <a href=""><p class="p-0 m-0 font-weight-bold" style="font-size:12px; color: #004483">5 Replies</p></a>
                                </div>
                            </div>
                            <div class="media mb-2">
                                <div class="media-body border border-light rounded p-2">
                                    <h5 class="mt-0 font-weight-bold"><a href="plumbhive/forum.html" class="head-topic">NEW Google Reveals the Fastest Growing Product Categories in Search Results.</a></h5>
                                  <p class="p-0 m-0" style="font-size:10px;"><a href="" style="font-weight:bold; color: #004483;">Adekunle</a> 5 hours ago in <a href="" style="font-weight:bold; color: #004483;">Fixing and Corrections</a></p>
                                  <p class="p-0 mb-1 contentLength">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at, Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,</p>
                                    <a href=""><p class="p-0 m-0 font-weight-bold" style="font-size:12px; color: #004483">5 Replies</p></a>
                                </div>
                            </div>
                            <div class="media mb-2">
                                <div class="media-body border border-light rounded p-2">
                                    <h5 class="mt-0 font-weight-bold"><a href="plumbhive/forum.html" class="head-topic">Facebook shares tips for an effective content calendar</a></h5>
                                  <p class="p-0 m-0" style="font-size:10px;"><a href="" style="font-weight:bold; color: #004483;">Adekunle</a> 5 hours ago in <a href="" style="font-weight:bold; color: #004483;">Plumbing Tools</a></p>
                                  <p class="p-0 mb-1 contentLength">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at, Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,</p>
                                    <a href=""><p class="p-0 m-0 font-weight-bold" style="font-size:12px; color: #004483">5 Replies</p></a>
                                </div>
                            </div>
                            <div class="media mb-2">
                                <div class="media-body border border-light rounded p-2">
                                    <h5 class="mt-0 font-weight-bold"><a href="plumbhive/forum.html" class="head-topic">Instagram testing new Stories feed navigation</a></h5>
                                  <p class="p-0 m-0" style="font-size:10px;"><a href="" style="font-weight:bold; color: #004483;">Adekunle</a> 5 hours ago in <a href="" style="font-weight:bold; color: #004483;">Plumbing Marketing</a></p>
                                  <p class="p-0 mb-1 contentLength">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at, Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,</p>
                                    <a href=""><p class="p-0 m-0 font-weight-bold" style="font-size:12px; color: #004483">5 Replies</p></a>
                                </div>
                            </div>
                            <div>
                              <nav>
                                <ul class="pagination pg-blue justify-content-center mt-4">
                                  <li class="page-item">
                                    <a class="page-link" aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                  </li>
                                  <li class="page-item active"><a class="page-link">1</a></li>
                                  <li class="page-item"><a class="page-link">2</a></li>
                                  <li class="page-item"><a class="page-link">3</a></li>
                                  <li class="page-item"><a class="page-link">4</a></li>
                                  <li class="page-item"><a class="page-link">5</a></li>
                                  <li class="page-item">
                                    <a class="page-link" aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4" style="">
                    <div class="row mx-1">
                      <div class="col-md-12 mb-5 white" style="border-radius: 10px;">
                          <h5 class="font-weight-bold mt-3">FORUM</h5> <hr class="blue">
                        <div class="mx-3 categories">
                            <ul style="list-style-type: circle;">
                              <li><a href="">All Topics</a></li>
                              <li><a href="">Plumbing Marketing</a></li>
                              <li><a href="">Plumbing Tools</a></li>
                              <li><a href="">Plumbing Engineers</a></li>
                              <li><a href="">Fixing and Corrections</a></li>
                              <li><a href="">Latest Materials</a></li>
                            </ul>
                        </div>
                      </div>

                      <div class="col-md-12 mb-5" style="border-radius: 10px;">
                        <img src="{{ asset('images/contact-bg.jpg') }}" alt="Advert" class="img-fluid">
                        <p>Advert</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height:30px;"></div>
    </section>
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
                          <a href="plumbhive/about.html">Who we are</a> <br>
                          <a href="plumbhive/contact.html">Contact Us</a><br>
                          <a href="index.html">Our Sites</a><br>
                          <a href="index.html">In the News</a><br>
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
                    <li><a href="plumbhive/about.html">About Us</a></li>
                    <li><a href="plumbhive/contact.html">Contact Us</a></li>
                    <li><a href="plumbhive/terms.html">Terms</a></li>
                    <li><a href="plumbhive/privacy.html">Privacy</a></li>
                  </ul>
                </div>
              </div>
            <p class="text-center font-weight-bold mb-4" style="font-size:10px;">Copyright &copy <span id="year"></span>, <i class="fa fa-heart red-text"></i> by Plumbhive</p>
        </div>
      </div>
    </section>
  </footer>


</body>

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