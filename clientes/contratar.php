<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>OnBoarding de clientes Gestor escolar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style>
    /* Oculta el botón de enviar inicialmente */
    #submit-button {
        display: none;
    }
  </style>
</head>

<body class="starter-page-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Gestor escolar</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="../index.html#hero">Inicio</a></li>
          <li><a href="../index.html#about">Acerca</a></li>
          <li><a href="../index.html#services">Servicios</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a href="#team">Team</a></li> -->
          <li><a href="../index.html#pricing">Precios</a></li>
          <li><a href="../index.html#contact">Contacto</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="../clientes/">Panel de clientes</a>
    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="../index.html">Inicio</a></li>
            <li class="current">OnBoarding</li>
          </ol>
        </nav>
        <!-- <h1>OnBoarding de clientes</h1> -->
      </div>
    </div><!-- End Page Title -->

    <!-- OnBoarding formulario -->
    <section id="onboarding-section" class="onboarding-section section">
        <div class="container" data-aos="fade-up">
            <h2>Proceso de contratación</h2>
            <img src="img/proceso_contrato.jpg" alt="Proceso contrato Gestor escolar">
            <br>
            <br>
            <hr>

            <h2>Contratación de servicios</h2>
            <p>Por favor llena el siguiente formulario para poder darte de alta en nuestro sistema</p>
            <form action="../forms/onboarding.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group mt-3">
                  <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre completo" required>
                </div>
                
                <div class="col-md-6 form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>

              <div class="row">
                  
                <div class="col-md-6 form-group mt-3">
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                    <input type="text" class="form-control" name="escuela" id="escuela" placeholder="Nombre de la escuela" required>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mt-3">
                    <!-- <input type="text" class="form-control" name="nivel" id="nivel" placeholder="Nivel educativo" required> -->
                    <select name="plataforma" id="plataforma" class="form-control" required>
                        <option value="">Seleccione uno</option>
                        <option value="1">Modular Plan $ 2,125 al mes </option>
                        <option value="2">Smart Plan $ 3,350 al mes </option>
                        <option value="3">Plus Plan $ 6,000 al mes </option>
                    </select>
                </div>
                <!-- captcha -->
                <div class="col-md-6">
                  <div class="g-recaptcha" data-sitekey="6LfpyQQqAAAAAAb3iYT16iOSmx8KDQqzBEHaUOz9" data-callback="captchaVerified"></div>
                </div>
                <!-- termina captcha -->
                <div class="col-md-12 form-group mt-3">
                    <div id="submit-button">
                      <div class="newsletter-form"><input type="submit" class="btn btn-success" value="Solicitar contrato"></div>
                    </div>
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Su solicitud a sido enviada. Gracias!</div>            
                </div>
              </div>
            </form>
            <hr>
        </div>
    </section>
    <!-- /OnBoarding formulario -->
        


    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">
      <div class="container" data-aos="fade-up">
        
        <h5>¡Bienvenido a Gestor Escolar!</h5>
        <p><b>Un viaje de mil kilometros inicia con el primer paso.</b><br>
        Lao Tse filósofo chino</p>

      </div>

    </section><!-- /Starter Section Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Descarga nuestro Newsletter mensual</h4>
            <p>Suscribete a nuestra publicación mensual y recibe las últimas noticias del ramo tech y sobre nuestros productos y servicios</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribete"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Su solicitud a sido enviada. Gracias!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Gestor escolar</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Querétaro, México</p>
            <p class="mt-3"><strong>Whatsapp:</strong> <span>4484882599</span></p>
            <p><strong>Email:</strong> <span>ventas@gestorescolar.com.mx</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Links del sitio</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Inicio</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Acerca</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Servicios</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Términos del servicio</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Soluciones del sistema</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Pagpos en línea</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Facturación electrónica</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Control de asistencia</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Actividades extraescolares</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Síguenos</h4>
          <p>Conoce nuestros contenidos en nuestras redes sociales</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-tiktok"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Gestor Escolar 2024-2025</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script>
    // Función llamada cuando reCAPTCHA es verificado con éxito
    function captchaVerified() {
        document.getElementById('submit-button').style.display = 'block';
    }
  </script>
</body>

</html>