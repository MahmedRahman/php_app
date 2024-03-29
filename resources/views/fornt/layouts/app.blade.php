

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>App flow - App launch Category Bootstrap Responsive Website Template - About : W3Layouts</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>

<!-- header -->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
            <a class="navbar-brand" href="index.html">
                <span class="fa fa-cube"></span> App Flow
            </a>
            <!-- if logo is image enable this   
        <a class="navbar-brand" href="#index.html">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('homeindex') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item @@about__active">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item @@pages__active">
                        <a class="nav-link" href="{{ route('features') }}">App features</a>
                    </li>
                    <li class="nav-item @@contact__active">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item ml-3 mr-2">
                        <a href="#download" class="btn btn-primary d-none d-lg-block btn-style">Download</a></li>
                </ul>
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
  </header>
  <!-- //header -->



    @yield('content')





<!-- footer-28 block -->
<section class="app-footer">
    <footer class="footer-28">
      <div class="footer-bg-layer">
        <div class="container py-lg-3">
          <div class="row footer-top-28">
            <div class="col-lg-4 footer-list-28 mt-5">
              <h6 class="footer-title-28">Contact information</h6>
              <p>Lorem ipsum dolor sit amet, consectetur elit. Nihil sit dicta, commodi maxime
                provident quidem non, amet.</p>

              <div class="main-social-footer-28 mt-3">
                <ul class="social-icons">
                  <li class="facebook">
                    <a href="#link" title="Facebook">
                      <span class="fa fa-facebook" aria-hidden="true"></span>
                    </a>
                  </li>
                  <li class="twitter">
                    <a href="#link" title="Twitter">
                      <span class="fa fa-twitter" aria-hidden="true"></span>
                    </a>
                  </li>
                  <li class="dribbble">
                    <a href="#link" title="Dribbble">
                      <span class="fa fa-dribbble" aria-hidden="true"></span>
                    </a>
                  </li>
                  <li class="google">
                    <a href="#link" title="Google">
                      <span class="fa fa-google" aria-hidden="true"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="row">
                <div class="col-md-4 col-6 footer-list-28 mt-5">
                  <h6 class="footer-title-28">Useful links</h6>
                  <ul>
                    <li><a href="features.html">App Features</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="#blog">Blog posts</a></li>
                    <li><a href="#pricing">Pricing plans</a></li>
                  </ul>
                </div>
                <div class="col-md-4 col-6 footer-list-28 mt-5">
                  <h6 class="footer-title-28">Product help</h6>
                  <ul>
                    <li><a href="#privacy">Privacy policy</a></li>
                    <li><a href="#support"> Support</a></li>
                    <li><a href="#terms">Terms & conditions</a></li>
                    <li><a href="#license">License and uses</a></li>
                  </ul>
                </div>
                <div class="col-md-4 footer-list-28 mt-5">
                  <h6 class="footer-title-28">Download</h6>
                  <a href="#playstore"><img src="assets/images/googleplay.png" class="img-fluid" alt=""></a>
                  <a href="#appstore"><img src="assets/images/appstore.png" class="img-fluid mt-md-2" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="midd-footer-28 align-center py-4 mt-5">
            <p class="copy-footer-28 text-center"> &copy; 2020 App Flow. All Rights Reserved. Design by <a
                href="https://w3layouts.com/">W3Layouts</a></p>
          </div>
        </div>


      </div>
    </footer>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //footer-28 block -->

  <!-- all js scripts and files here -->

  <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

  <script src="assets/js/jquery-3.3.1.min.js"></script><!-- default jQuery -->

<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>
<!-- magnific popup -->


<script src="assets/js/owl.carousel.js"></script>
<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 2,
          nav: false
        },
        736: {
          items: 3,
          nav: false
        },
        1000: {
          items: 4,
          nav: false,
          loop: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.min.js"></script>

  </body>

  </html>