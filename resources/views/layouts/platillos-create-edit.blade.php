<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Favicons -->
  <link href="{{{ asset('img/favicon.png')}}}" rel="icon">
  <link href="{{{ asset('img/apple-touch-icon.png')}}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}}" rel="stylesheet">
  <link href="{{{ asset('vendor/icofont/icofont.min.css')}}}" rel="stylesheet">
  <link href="{{{ asset('vendor/boxicons/css/boxicons.min.css')}}}" rel="stylesheet">
  <link href="{{{ asset('vendor/animate.css/animate.min.css')}}}" rel="stylesheet">
  <link href="{{{ asset('vendor/venobox/venobox.css')}}}" rel="stylesheet">
  <link href="{{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{{ asset('css/inner_styles.css')}}}" rel="stylesheet">
</head>

<body>
  <main id="main">
        @yield('contenido')
  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  
  <!-- Vendor JS Files -->
  <script src="{{{ asset('vendor/jquery/jquery.min.js')}}}"></script>
  <script src="{{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}}"></script>
  <script src="{{{ asset('vendor/jquery.easing/jquery.easing.min.js')}}}"></script>
  <script src="{{{ asset('vendor/php-email-form/validate.js')}}}"></script>
  <script src="{{{ asset('vendor/jquery-sticky/jquery.sticky.js')}}}"></script>
  <script src="{{{ asset('vendor/isotope-layout/isotope.pkgd.min.js')}}}"></script>
  <script src="{{{ asset('vendor/venobox/venobox.min.js')}}}"></script>
  <script src="{{{ asset('vendor/owl.carousel/owl.carousel.min.js')}}}"></script>

  <!-- Template Main JS File -->
  <script src="{{{ asset('js/main.js')}}}"></script>

</body>

</html>