<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>TheSaaS — Responsive Bootstrap SaaS, Software & WebApp Template</title>

    <!-- Styles -->
    <link href="{{ asset('front_theme/css/page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front_theme/css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('front_theme/img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('front_theme/img/favicon.png') }}">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="TheSaaS">
    <meta property="og:description" content="A responsive, professional, and multipurpose SaaS, Software, Startup and WebApp landing template powered by Bootstrap 4.">
    <meta property="og:image" content="http://thetheme.io/thesaas/assets/img/og-img.jpg">
    <meta property="og:url" content="http://thetheme.io/thesaas/">
    <meta name="twitter:card" content="summary_large_image">
  </head>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="index.html">
            <img class="logo-dark" src="{{ asset('front_theme/img/logo-dark.png') }}" alt="logo">
            <img class="logo-light" src="{{ asset('front_theme/img/logo-light.png') }}" alt="logo">
          </a>
        </div>

        <section class="navbar-mobile">
          <span class="navbar-divider d-mobile-none"></span>

          <nav class="nav nav-navbar">
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link" href="#">Blog</a>
            <a class="nav-link" href="#">Help</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </section>

        <a class="btn btn-sm btn-round btn-dark" href="readme.html">Read me</a>

      </div>
    </nav><!-- /.navbar -->


    <!-- Header -->
    <header class="header text-white pt-12 pb-10" style="background-image: linear-gradient(-45deg, #667eea 0%, #764ba2 100%);">
      <div class="container">
        <h1 class="display-4">Start New Project</h1>
        <p class="lead-2 mt-6">This is a starting point for your next awesome project. The skeleton is ready, just populate it.</p>
      </div>
    </header><!-- /.header -->


    @yield('content')


    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">

          <div class="col-6 col-lg-3">
            <a href="index.html"><img src="{{ asset('front_theme/img/logo-dark.png') }}" alt="logo"></a>
          </div>

          <div class="col-6 col-lg-3 text-right order-lg-last">
            <div class="social">
              <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
              <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
              <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
              <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="nav nav-bold nav-uppercase nav-trim justify-content-lg-center">
              <a class="nav-link" href="#">About</a>
              <a class="nav-link" href="#">Blog</a>
              <a class="nav-link" href="#">Policy</a>
              <a class="nav-link" href="#">Contact</a>
            </div>
          </div>

        </div>
      </div>
    </footer><!-- /.footer -->


    <!-- Scripts -->
    <script src="{{ asset('front_theme/js/page.min.js') }}"></script>
    <script src="{{ asset('front_theme/js/script.js') }}"></script>

  </body>
</html>
