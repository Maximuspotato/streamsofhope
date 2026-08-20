<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Streams of Hope &mdash; Flowing Hope, Transforming Lives</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,500|Dosis:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.ico') }}">

  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.jfif') }}" alt="Streams of Hope Logo" class="img-fluid" width="80"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About</a></li>
          <li class="nav-item"><a href="{{ url('/causes') }}" class="nav-link">Causes</a></li>
          <li class="nav-item"><a href="{{ url('/gallery') }}" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="{{ url('/donate') }}" class="btn btn-primary nav-link" role="button">Donate</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  @yield('content')
  
  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">About Streams of Hope</h3>
          <p class="lead">We are a grassroots organization based in Nairobi, Kenya, dedicated to restoring dignity and unlocking potential in vulnerable communities.</p>
          <p class="mb-5">Through education, holistic health initiatives, and women's empowerment, we build sustainable pathways out of poverty.</p>
          <p><a href="{{ url('/about') }}" class="link-underline">Read More</a></p>
        </div>
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">Recent Causes</h3>
          @foreach($footerCauses as $cause)
            <div class="block-21 d-flex mb-4">
              <figure class="mr-3">
                <img src="{{ asset('storage/' . $cause->image_path) }}" alt="{{ $cause->title }}" class="img-fluid">
              </figure>
              <div class="text">
                <h3 class="heading"><a href="{{ url('/causes/' . $cause->slug) }}">{{ $cause->title }}</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> {{ $cause->created_at->format('F d, Y') }}</a></div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Get Connected</h3>
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Nairobi, Kenya</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+254 xxx xxx xxx</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@streamsofhopeinitiative.org</span></a></li>
              </ul>
            </div>
        </div>
        
        
      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-center">
          <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="ion-ios-heart text-danger" aria-hidden="true"></i> by <a href="https://thewetchicken.com" target="_blank" >TWC</a></br>
            <a href="{{ route('admin.blogs.index') }}" class="text-muted" style="text-decoration: none;">admin</a>
            <a href="{{ route('admin.causes.index') }}" class="text-muted" style="text-decoration: none;">center</a>
          </p>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#6dbfb8"/></svg></div>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>

    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>

    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    
  </body>
</html>