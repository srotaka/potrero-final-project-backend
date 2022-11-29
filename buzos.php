<?php
$configs = include('config.php');
session_start();
if(isset( $_SESSION["nombreCompleto"])){?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Haruki Store</title>

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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>

<body>
  <!-- ***** Navbar ***** -->

  <nav class="navbar navbar-expand-lg navbar-dark-purple">
    <div class="container-fluid">
      <a class="navbar-brand-light" href="./index.php">Haruki Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="navbar-toggler-buttom">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link nav-link-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Productos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./productos.php">Todos los productos</a>
              <div class="dropdown-divider"></div>
              <!-- <a class="dropdown-item" href="./buzos.php">Buzos</a> -->
              <a class="dropdown-item" href="./camperas.php">Camperas</a>
              <a class="dropdown-item" href="./pantalones.php">Pantalones</a>
              <a class="dropdown-item" href="./polleras.php">Polleras</a>
              <a class="dropdown-item" href="./remeras.php">Remeras</a>
              <a class="dropdown-item" href="./shorts.php">Shorts</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="./agregar-producto.php">Agregar nuevo producto</a>   
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-white" href="./index.php#contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-white" href="./index.php#contact-me">Escríbeme</a>
          </li>
         <li class="nav-item">
            <a class="nav-link nav-link-white" href="./cerrar-sesion.php">Cerrar Sesión</a>
          </li>
        </ul>
        <img src="./assets/images/calendar-01.png" alt="calendar" width="40" id="calendar-img">
        <span id="spanDate" style="color: #fff; font-weight:500;">today</span>
      </div>

    </div>
  </nav>
  <!-- ***** End Navbar ***** -->

  <!-- ***** Header ***** -->
  <section>
    <div class="title-section">
      <h2> <strong>Catálogo: Buzos</strong></h2>      
    </div>

    <!-- *** Sidebar ***  -->
    <section>       
        <div class="sidenav">
        <h3 class="filtrar-productos mt-2 mb-0">Filtros</h3>          
          <button class="dropdown-btn dropdown-filtros">Buzos
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="./buzos.php">Todos</a>
            <a href="./buzos-adidas.php">Adidas</a>
            <a href="./buzos-nike.php">Nike</a>
            <a href="./buzos-topper.php">Topper</a>
          </div>

          <button class="dropdown-btn dropdown-filtros">Camperas
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="./camperas.php">Todos</a>
            <a href="./camperas-Adidas.php">Adidas</a>
            <a href="./camperas-nike.php">Nike</a>
            <a href="./camperas-topper.php">Topper</a>
          </div>

          <button class="dropdown-btn dropdown-filtros">Pantalones
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="./pantalones.php">Todos</a>
            <a href="./pantalones-Adidas.php">Adidas</a>
            <a href="./pantalones-nike.php">Nike</a>
            <a href="./pantalones-topper.php">Topper</a>
          </div>

          <button class="dropdown-btn dropdown-filtros">Polleras
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="./polleras.php">Todos</a>
            <a href="./polleras-Adidas.php">Adidas</a>
            <a href="./polleras-nike.php">Nike</a>
            <a href="./polleras-topper.php">Topper</a>
          </div>

          <button class="dropdown-btn dropdown-filtros">Remeras
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="./remeras.php">Todos</a>
            <a href="./remeras-Adidas.php">Adidas</a>
            <a href="./remeras-nike.php">Nike</a>
            <a href="./remeras-topper.php">Topper</a>
          </div>

          <button class="dropdown-btn dropdown-filtros">Shorts
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="./shorts.php">Todos</a>
            <a href="./shorts-Adidas.php">Adidas</a>
            <a href="./shorts-nike.php">Nike</a>
            <a href="./shorts-topper.php">Topper</a>
          </div>

          <div class="dropdown-divider"></div>
          <a href="./agregar-producto.php" style="color:#fff">Agregar nuevo producto</a>          
        </div>
      </section>
      <!-- *** End Sidebar ***  -->

    <div class="container">
      <!-- *** Product Cards *** -->
      <div class="container mt-2 mb-5">
        <div class="d-flex justify-content-center row">
          <div class="col-md-8">
            <!-- Product from DB -->
            <?php
            $conexion = mysqli_connect($configs->host, $configs->username, $configs->pass);
            mysqli_select_db($conexion, $configs->db);
            $consulta = "SELECT * FROM productos WHERE tipo_prenda = 'buzo'";
            $datos = mysqli_query($conexion, $consulta);

            while ($reg = mysqli_fetch_array($datos)) { ?>

              <div class="row p-2 bg-white border rounded mt-2">
                <div class="col-md-2 mt-1 product-img-container">
                  <img class="img-fluid img-responsive rounded product-image" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen']) ?>">
                </div>
                <div class="col-md-6 mt-3">
                  <h2 class="producto-marca"></span><span class="dot"></span><?php echo $reg['marca']; ?></span><span class="dot"></span></h2>
                  <h3 class="producto-tipo"><?php echo $reg['tipo_prenda']; ?></h3>
                  <h4 class="producto-talle">Talle: <?php echo $reg['talle']; ?></h4>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                  <div class="d-flex flex-row align-items-center">
                    <h4 class="mr-1">$<?php echo $reg['precio']; ?></h4><span class="strike-text">$<?php echo $reg['precio']+(0.2*$reg['precio']); ?></span>
                  </div>
                  <h6 class="text-success">Envío gratis</h6>
                  <div class="d-flex flex-column mt-4">
                    <a href="./editar-producto.php?id=<?php echo $reg['id'];?>" class="button btn btn-outline-primary btn-sm">Editar</a>
                    <a href="./eliminar-producto.php?id=<?php echo $reg['id']; ?>" class="button btn btn-danger btn-sm mt-1">Eliminar</a>
                  </div>
                </div>
              </div>
            <?php } ?>
            <!-- End Product from DB -->

          </div>
        </div>
      </div>
      <!-- *** End Product Card *** -->

    </div>



  </section>
  <!-- ***** End Header ***** -->




  <!-- ***** Back to top button ***** -->
  <button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- ***** Footer *****-->
  <footer id="footer-purple">
    <div class="container">
      <div class="copyright text-center">
        &copy; Copyright 2021-
        <script>
          new Date().getFullYear() > 2010 && document.write(new Date().getFullYear());
        </script> |
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
  </script>
  <script src="./assets/vendor/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="./assets/js/back-to-top.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="./assets/vendor/php-email-form/validate.js"></script>
  <script src="./assets/js/sidebar-dropdown.js"></script>
 
 
  <script>
    AOS.init();
  </script>

</body>

</html>
<?php
} else {
  header("location:./login.html");
}
?>