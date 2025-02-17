<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="48x48" href="assets/images/favicon.ico">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600&amp;display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <!-- Fontawesome CSS-->
  <link rel="stylesheet" href="assets/css/all.css" />

  <!-- slick css -->
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/slick-theme.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/preloader.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <link rel="stylesheet" href="assets/css/dark.css" />

  <title>{{config('app.name')}} - Voting Management System</title>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader-wrapper">
    <div class="preloader">
      <div class="preloader-circle" id="status">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>
  <!-- Preloader end -->

  <!-- Header -->
  <header>
	    <!-- Top header -->
    <div class="top-header">
      <div class="container">
        <div class="row  align-items-center">
          <div class="col-md-5">
            <div class="brand-name text-center">
              <a href="/">
                <h1>{{config('app.name')}}</h1>
                <span>Free and Fair Representation</span>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- Top header end -->


    <div class="body-overlay"></div>
  </header>
  <!-- header end -->
  <div class="container">
  <section class="contact-section">
    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-md-6 col-lg-7">
                <div class="contact-info">
                    <h3>Democracy in the digital age</h3>
                    <p>The most convenient way to make your voice as a comrade count, from 
                        the comfort of anywhere just at the touch of a button.
                    </p>
                    <ul class="contact-list">
                        <li><i class="fas fa-envelope"></i> <a href="mailto:abc@example.com.com">comradesvoice@gmail.com</a> </li>
                        <li><i class="fas fa-phone fa-flip-horizontal"></i><a href="tel:1234567890">0791514737</a>
                        </li>
                        <li><i class="fas fa-map-marker-alt"></i>Kenya</li>
                    </ul>
                    <div class="circular-icons social-links">
                        <ul>
                            <li><a href="https://demo.codevibrant.com/html/kavya/contact.html#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://demo.codevibrant.com/html/kavya/contact.html#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://demo.codevibrant.com/html/kavya/contact.html#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="https://demo.codevibrant.com/html/kavya/contact.html#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ session('status') }}
                    </div>
                @elseif(session('failed'))
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ session('failed') }}
                    </div>
                @endif
                <form class="contact-form" action="{{route('form.search')}}" method="get" role="search">
                    {{csrf_field()}}
                    <h3>Get your vote out</h3>
                    <p>Please fill in your registration number</p>
                    <input type="text" class="form-control" placeholder="Your Registration Number" name="search">

                    <button class="btn btn-solid" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

  </div>

    <!-- Footer section -->
    <footer class="footer-section pb-0">
	<div class="container">
      <div class="footer-content">
        <div class="footer-logo">
          <a href="#">
            <h5 class="brand-name"> {{config('app.name')}}</h5>
          </a>
        </div>
        <div class="footer-copyright">
          <p>&copy;2022 {{config('app.name')}}. All rights reserved. Theme designed by <a href="#">Jakes</a> </p>
        </div>
        <div class="social-links">
          <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
          </ul>
        </div>
      </div>
</div>
    </footer>
    <!-- Footer section end -->

  <!-- Scroll to top -->
  <div id="stop" class="scroll-to-top">
    <span><a href="#"><i class="fas fa-arrow-up"></i></a></span>
  </div>
  <!-- Scroll to top end -->

  <!-- Javascript -->
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/jquery.sticky.js"></script>
  <script src="assets/js/ResizeSensor.min.js"></script>
  <script src="assets/js/theia-sticky-sidebar.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="js/app.js"></script>
</body>


</html>