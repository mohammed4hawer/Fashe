<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title> My Profile </title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link href="css/style.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:300,400,700" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <header class="hero">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-6 col-xs-12">
              <nav>
                <div id="menu-toggle">
                  <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                  </div>
                  <div class="cross">
                    <span class="line"></span>
                    <span class="line"></span>
                  </div>
                </div>
                <ul class="main-nav">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Portfolio</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="../index.php">Back To Site</a></li>
                </ul>
              </nav>
              <!-- <a href="#" class="menu"><img src="assets/menu.png"></a> -->
              <div class="hero-text">
                <h1><span>Hi, I am</span><br>Muhammad Shawer.</h1>
                <h3>Freelance Developer From Egypt</h3>
                <a href="#" class="btn btn-lg btn-primary">Know More</a>
                <ul class="social-links">
                  <li class="label">Join me here</li>
                  <li><a href="#"><img src="assets/behance.png"></a></li>
                  <li><a href="#"><img src="assets/dribbble.png"></a></li>
                  <li><a href="#"><img src="assets/twitter.png"></a></li>
                  <li><a href="#"><img src="assets/github.png"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>

      <section class="case-study">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="sub-heading">Exclusively</h4>
              <h1 class="heading purple"><span class="purple">works</span> with <br>Startups and founders</h1>
              <!-- Swiper -->
              <div class="swiper-container client-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide client-box">
                    <img src="assets/logo-1.png" class="client-logo">
                    <h3 class="text-left title">Visual identity for upsidedown</h3>
                    <p class="text-left tag">Branding, Back-End, Website</p>
                    <p class="text-left"><a href="#">Know More &#8594;</a></p>
                  </div>
                  <div class="swiper-slide client-box">
                    <img src="assets/logo-2.png" class="client-logo">
                    <h3 class="text-left title">User Experience develop for the AI</h3>
                    <p class="text-left tag">Branding, Back-End, Website</p>
                    <p class="text-left"><a href="#">Know More &#8594;</a></p>
                  </div>
                  <div class="swiper-slide client-box">
                    <img src="assets/logo-3.png" class="client-logo">
                    <h3 class="text-left title">Rebranding of the best motion studio</h3>
                    <p class="text-left tag">Branding, Back-End, Website</p>
                    <p class="text-left"><a href="#">Know More &#8594;</a></p>
                  </div>
                  <div class="swiper-slide client-box">
                    <img src="assets/logo-1.png" class="client-logo">
                    <h3 class="text-left title">Visual identity for upsidedown</h3>
                    <p class="text-left tag">Branding, Back-End, Website</p>
                    <p class="text-left"><a href="#">Know More &#8594;</a></p>
                  </div>
                  <div class="swiper-slide client-box">
                    <img src="assets/logo-2.png" class="client-logo">
                    <h3 class="text-left title">Visual identity for upsidedown</h3>
                    <p class="text-left tag">Branding, Back-End, Website</p>
                    <p class="text-left"><a href="#">Know More &#8594;</a></p>
                  </div>
                </div>
                
              </div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonial">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="sub-heading">Happy</h4>
              <h1 class="heading pink"><span class="pink">Client's</span> hello <br>testimonials</h1>
            </div>
          </div>  
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- Swiper -->
              <div class="swiper-container testimonial-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide testimonial-box yellow">
                    <h1>Pixel Perfect design</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- John Doe</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box purple">
                    <h1>Minimal and Clean</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Rocky Hych</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box blue">
                    <h1>Built with Bootstrap</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- John Doe</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box pink">
                    <h1>Responsive template</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Rocky Hych</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box yellow">
                    <h1>Pixel Perfect</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- John Doe</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box purple">
                    <h1>Minimal and Clean</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Rocky Hych</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box blue">
                    <h1>Pixel Perfect</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- John Doe</p>
                      <p class="designation">Founder, Arrow</p>
                    </div>
                  </div>
                  <div class="swiper-slide testimonial-box pink">
                    <h1>Minimal and Clean</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
                    <div class="text-right">
                      <p class="name">- Rocky Hych</p>
                      <p class="designation">CTO, Upside Down</p>
                    </div>
                  </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Statistics -->
      <section class="stats">
        <div class="container">
          <div class="row">
            <div class="col-md-4 text-center stat-box">
              <h1 class="purple"><span class="counter">3.2</span>k</h1>
              <h3>Hours</h3>
            </div>
            <div class="col-md-4 text-center stat-box">
              <h1 class="blue counter">217</h1>
              <h3>Projects</h3>
            </div>
            <div class="col-md-4 text-center stat-box">
              <h1 class="pink"><span class="counter">18.3</span>k</h1>
              <h3>Cups of Coffee</h3>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Banner -->
      <section class="contact-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h1>Let’s talk about your product</h1>
              <a href="#" class="btn btn-lg btn-primary">Get in touch now</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <footer>
        <div class="container-fluid">
          <div class="row footer">
            <div class="col-md-12 text-center">
              <h1>Muhammad<br><span>Shawer</span></h1>
              <ul class="social-links">
                <li><a href="#"><img src="assets/behance.png"></a></li>
                <li><a href="#"><img src="assets/dribbble.png"></a></li>
                <li><a href="#"><img src="assets/twitter.png"></a></li>
                <li><a href="#"><img src="assets/github.png"></a></li>
              </ul>
            </div>
          </div>
          <div class="row sub-footer">
            <div class="col-md-12 text-center">
              <p>Designed by <a href="#" target="_blank">@ShayTech</a> | Download <a href="https://designbundles.net/free-design-resources">here</a></p>
            </div>
          </div>
        </div>
      </footer>

      <!-- Some Javascript -->
      <script src="js/jquery-2.1.1.js"></script>
      <script src="js/swiper.jquery.min.js"></script>
      <script> 
        <!-- Initialize Client Swiper -->
      
      var swiper1 = new Swiper('.client-swiper', {
        slidesPerView: 3,
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 60,
        // Responsive breakpoints
        breakpoints: {
          // when window width is <= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: '.swiper-pagination'
          },
          // when window width is <= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          // when window width is <= 640px
          640: {
            slidesPerView: 1,
            spaceBetween: 30
          }
        }
      });
      // Initialize Testimonial Swiper
      var swiper2 = new Swiper('.testimonial-swiper', {
        slidesPerView: 3,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        grabCursor: true,
        freeMode: true,
        breakpoints: {
          // when window width is <= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          // when window width is <= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 10
          },
          // when window width is <= 640px
          640: {
            slidesPerView: 1,
            spaceBetween: 10
          }
        }
      });
      </script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <script>
      // Counterup
      $('.counter').counterUp({
        time: 1000
      });

      // Main Navigation
      $('#menu-toggle').click(function(){
        $(this).toggleClass('open'),
        $('.main-nav').toggleClass('show-it');
      })
      
        </script>

      <!-- Google Analytics - You should remove this -->
<!--
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-29231762-2', 'auto');
      ga('send', 'pageview');

      </script>
-->
    </body>
    </html>
