<?php
session_start();
if(isset( $_SESSION["nombreCompleto"])){?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Haruki Store | Home</title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Rochester&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Besley&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
  <!-- Style -->
  <link rel="stylesheet" href="./assets/style/bootstrap.css">
  <link rel="stylesheet" href="./assets/style/style.css">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>

<body>
  <!-- ***** Navbar ***** -->

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Haruki Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
        id="navbar-toggler-buttom">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Catálogo
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./productos.php">Todos los productos</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="./buzos.php">Buzos</a>
              <a class="dropdown-item" href="./camperas.php">Camperas</a>
              <a class="dropdown-item" href="./pantalones.php">Pantalones</a>
              <a class="dropdown-item" href="./polleras.php">Polleras</a>
              <a class="dropdown-item" href="./remeras.php">Remeras</a>
              <a class="dropdown-item" href="./shorts.php">Shorts</a>              
            </div>
            <div>
              Hola <?php echo $_SESSION["nombreCompleto"]?>
            </div>
          </li>                   
          <li class="nav-item">
            <a class="nav-link" href="#contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact-me">Escríbeme</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="./cerrar-sesion.php">Cerrar Sesión</a>
          </li>
        </ul>
        <img src="./assets/images/calendar-01.png" alt="calendar" width="40" id="calendar-img">
        <span id="spanDate">today</span>
      </div>

    </div>
  </nav>
  <!-- ***** End Navbar ***** -->

  <!-- ***** Header ***** -->
  <header class="header-home">
    <h1 class="header-main-text">
      Haruki Store     
    </h1>
    <hr class="cyan-line white-line">
    <p class="header-sub-text">
      <i class="bx bxs-quote-alt-left bx-tada bx-md"></i>
      Construimos tu mejor versión
      <i class="bx bxs-quote-alt-right bx-tada bx-md"></i>
    </p>

  </header>
  <!-- ***** End Header ***** -->


  <!-- Contact information -->
  <section class="bg-light" id="contacto">
    <div class="container">
      <div class="title-section">
        <h2> <strong>Información de contacto</strong></h2>
      </div>
      <div class="container2">
        <div class="card" data-aos="fade-up">
          <div class="face face1">
            <div class="content">
              <div class="icon">
                <img src="./assets/images/social-mail.png" alt="social-mail" width="120">
              </div>
            </div>
          </div>
          <div class="face face2">
            <div class="content">
              <h3>
                <a href="mailto:srotaka@gmail.com" target="_blank">srotaka@gmail.com</a>
              </h3>
              <p>Siéntete libre de contactarme por cualquier inquietud.</p>
            </div>
          </div>
        </div>
        <div class="card" data-aos="fade-up">
          <div class="face face1">
            <div class="content">
              <div class="icon">
                <img src="./assets/images/social-linkedin.png" alt="social-linkedin" width="120">
              </div>
            </div>
          </div>
          <div class="face face2">
            <div class="content">
              <h3>
                <a href="https://www.linkedin.com/in/silvia-raquel-otaka/" target="_blank">Mi LikedIn</a>
              </h3>
              <p>Puedes encontrarme en LinkedIn.</p>
            </div>
          </div>
        </div>
        <div class="card" data-aos="fade-up">
          <div class="face face1">
            <div class="content">
              <div class="icon">
                <img src="./assets/images/social-github.png" alt="social-github" width="120">
              </div>
            </div>
          </div>
          <div class="face face2">
            <div class="content">
              <h3>
                <a href="https://github.com/srotaka" target="_blank">github.com/srotaka</a>
              </h3>
              <p>Aquí puedes encontrar alguno de mis proyectos.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact information -->

  <!-- ***** Contact Form ***** -->
  <section class="contact-form bg-light-grey" id="contact-me">
    <!-- <section class="ftco-section"> -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="title-section">
          <h2> <strong>Formulario de contacto</strong></h2>
          <p>¡Envíame un mensaje !</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="form-img">
            <div class="row">
              <div class="col-md-9 col-lg-7">
                <div class="contact-wrap w-100 p-md-5 p-4">

                  <div id="form-message-warning" class="mb-4"></div>
                  <div id="form-message-success" class="mb-4">
                    Tu mensaje ha sido enviado. ¡Muchas gracias!
                  </div>
                  <form action="./forms/contact.php" method="post" role="form" id="contactForm" name="contactForm"
                    class="contactForm php-email-form">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label" for="name">Nombre</label>
                          <input ype="text" name="name" class="form-control no-uppercase" id="name" placeholder="Tu nombre"
                            data-rule="minlen:4" data-msg="Por favor, ingresa al menos 4 caracteres." />
                          <div class="validate"></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label" for="email">Email</label>
                          <input type="email" class="form-control no-uppercase" name="email" id="email" placeholder="mail@mail.com"
                            data-rule="email" data-msg="Por favor ingresa un email válido" />
                          <div class="validate"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <br>
                        <div class="form-group">
                          <label class="label" for="subject">Asunto</label>
                          <input type="text" class="form-control no-uppercase" name="subject" id="subject" placeholder="..."
                            data-rule="minlen:4" data-msg="Por favor, ingresa al menos 8 caracteres de asunto." />
                          <div class="validate"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <br>
                      <div class="form-group">
                        <label class="label" for="#">Mensaje</label>
                        <textarea name="message" class="form-control no-uppercase" id="message" rows="5"
                          placeholder="Tu mensaje va aquí..." data-rule="required"
                          data-msg="Por favor, ingresa un mensaje."></textarea>
                        <div class="validate"></div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="loading">Cargando</div>
                      <div class="error-message"></div>
                      <div class="sent-message">
                        Tu mensaje ha sido enviado. ¡Muchas Gracias!
                      </div>
                    </div>
                    <div class="col-md-12">
                      <br>
                      <div class="form-group">
                        <button type="submit" class="btn-Myinfo form-buttom">Enviar</button>
                        <button type="reset" class="btn-Myinfo form-buttom">Cancelar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** End Cotact Form ***** -->


  <!-- ***** Back to top button ***** -->
  <button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- ***** Footer *****-->
  <footer id="footer">
    <div class="container">
      <div class="copyright text-center">
        &copy; Copyright 2021-
        <script>new Date().getFullYear() > 2010 && document.write(new Date().getFullYear());</script> |
        <b><span>Silvia Otaka</span></b> | Programming with ❤ <br />
      </div>
    </div>
  </footer>
  <!-- ***** End Footer ***** -->


  <!-- ***** JS Scripts ***** -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
  <script src="./assets/js/bootstrap.bundle.js"></script>
  
  <script src="./assets/js/todayDate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
  <script src="./assets/vendor/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
    integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
    integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
    crossorigin="anonymous"></script>
  <script src="./assets/js/back-to-top.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="./assets/vendor/php-email-form/validate.js"></script>

  <!-- Script para envío de emails con EmailJS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
  <script src="https://cdn.emailjs.com/dist/email.min.js" type="text/javascript"></script>
  <script src="./assets/js/email-confirmation.js"></script>
  <script>AOS.init();</script>

</body>

</html>

<?php
} else {
  header("location:./login.html");
}
?>