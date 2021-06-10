<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
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
  <link href="{{{ asset('css/style.css')}}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
    <div class="container text-right">
      <i class="icofont-phone"></i> +1 5589 55488 55
      <i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>MVC Restaurant</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#why-us">Acerca de</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#gallery">Gallería</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#contact">Contactanos</a></li>

          @if (Route::has('login'))
                    @auth 
                        <li class="book-a-table text-center">
                         @csrf
                          <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn"><a>Volver al sistema</a></button>
                          </form>
                        </li>
                    @else
                        <li class="book-a-table text-center"><a href="{{ route('login') }}">Log in</a></li>
                        @if (Route::has('register'))
                            <li class="book-a-table text-center"><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
            @endif
                  
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style='background: url("{{{asset('img/slide/slide-1.jpg')}}}");'>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>MVC</span> Restaurant</h2>
                <p class="animate__animated animate__fadeInUp">Ven a conocer MVC Restaurant donde probarás comida de 3 países Cuba, Venezuela y México.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Nuestro Menu</a>
                  <a href="{{ route('ordenar') }}" class="btn-book animate__animated animate__fadeInUp scrollto">Ordenar</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style='background: url("{{{asset('img/slide/slide-2.jpg')}}}");'>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Locación</h2>
                <p class="animate__animated animate__fadeInUp">Con un estilo elegante y distinguido y una gran atención. Uno de los mejores restaurantes en Guadalajara.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Nuestro Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style='background: url("{{{ asset('img/slide/slide-3.jpg')}}}");'>
            <div class="carousel-background"><img src="{{{ asset('img/slide/slide-3.jpg')}}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Ven a conocernos</h2>
                <p class="animate__animated animate__fadeInUp"> Comida exquisita para todos los gustos.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Nuestro Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Por que elegir <span>MVC Restaurant</span></h2>
          <p>Uno de los restaurante más diversos de la ciudad. La calidad en la atención nos carateriza.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Diversidad de platillos</h4>
              <p>La gastronomía cubana, venezolana y mexicana mezcladas en un solo lugar.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Calidad en la atención</h4>
              <p>Nuestra prioridad siempre resulta la atención a nuestros consumidores.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4>Locación</h4>
              <p>Uno de los lugares más reconocidos en la ciudad de Guadalajara.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Dale un Vistazo a Nuestro <span>Menu</span></h2>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active"><a href="{{ route('ordenar') }}">Pedir Orden</a></li>
            </ul>
          </div>
        </div>  
        <div class="row menu-container">
          @foreach ($platillos as $platillo)  
            @if($platillo->disponibilidad == 1) 
              <div class="col-sm-12 menu-item filter-starters">
                <div class="menu-content">
                  <a>{{ $platillo->nombre }}</a><span>{{ $platillo->precio }}</span>
                </div>
                <div class="menu-ingredients">
                  {{ $platillo->ingredientes }}
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Algunas fotos de nuestro<span> Nuestro Restaurante</span></h2>
          <p>Ambiente elegante y distinguido es lo que nos distingue. Venga a conocer nuestras instalaciones.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{{ asset('img/gallery/gallery-1.jpg')}}}" class="venobox" data-gall="gallery-item">
                <img src="{{{ asset('img/gallery/gallery-1.jpg')}}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{{ asset('img/gallery/gallery-2.jpg')}}}" class="venobox" data-gall="gallery-item">
                <img src="{{{ asset('img/gallery/gallery-2.jpg')}}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{{ asset('img/gallery/gallery-3.jpg')}}}" class="venobox" data-gall="gallery-item">
                <img src="{{{ asset('img/gallery/gallery-3.jpg')}}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{{ asset('img/gallery/gallery-4.jpg')}}}" class="venobox" data-gall="gallery-item">
                <img src="{{{ asset('img/gallery/gallery-4.jpg')}}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{{ asset('img/gallery/gallery-5.jpg')}}}" class="venobox" data-gall="gallery-item">
                <img src="{{{ asset('img/gallery/gallery-5.jpg')}}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{{ asset('img/gallery/gallery-6.jpg')}}}" class="venobox" data-gall="gallery-item">
                <img src="{{{ asset('img/gallery/gallery-6.jpg')}}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{{ asset('img/gallery/gallery-7.jpg')}}}" class="venobox" data-gall="gallery-item">
                <img src="{{{ asset('img/gallery/gallery-7.jpg')}}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{{ asset('img/gallery/gallery-8.jpg')}}}" class="venobox" data-gall="gallery-item">
                <img src="{{{ asset('img/gallery/gallery-8.jpg')}}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Nuestros <span>Chefs</span>  Profesionales</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{{ asset('img/chefs/chefs-1.jpg')}}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Master Chef</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{{ asset('img/chefs/chefs-2.jpg')}}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{{ asset('img/chefs/chefs-3.jpg')}}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cook</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="{{{ asset('img/testimonials/testimonials-1.jpg')}}}" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Empresario</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Lo recomiendo al 100%, buen servicio, en un futuro repetiré pues me ha dado ganas de probar otros platos y otros cócteles de la carta.Gran equipo de profesionales. Han estado atentos y han sido correctos. 
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{{ asset('img/testimonials/testimonials-2.jpg')}}}" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Diseñadora</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Me gusto mucho la comida fue espectacular, el trato recibido tambien fue muy bueno, lo recomiendo si estas por la zona.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{{ asset('img/testimonials/testimonials-3.jpg')}}}" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Empresaria</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Nuestra visita a este fabuloso restaurante fue extraordinaria! El servicio y la comida eran excepcionales y la presentación de los platos era hermosa! La comida explota con sabores y los maridajes encajan perfectamente. 
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contacta</span>nos</h2>
          <p>Nos encontramos en la ciudad de Guadalajara.</p>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.307782894835!2d-103.32714258510869!3d20.657053586200988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b23a9bbba80d%3A0xdacdb7fd592feb90!2sCentro%20Universitario%20de%20Ciencias%20Exactas%20e%20Ingenier%C3%ADas!5e0!3m2!1ses!2smx!4v1623269858983!5m2!1ses!2smx" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="icofont-google-map"></i>
              <h4>Ubicación:</h4>
              <p>Blvd. Gral. Marcelino García 1421 <br>Guadalajara, Jal. 44430 </p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-clock-time icofont-rotate-90"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com<br>contact@example.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>MVC Restaurant</h3>
      <p>Software Desarrollado por MVC Team.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MVC Team Development</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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