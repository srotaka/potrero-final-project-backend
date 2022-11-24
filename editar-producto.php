<?php
Ob_start();
$conexion = mysqli_connect("127.0.0.1", "root", "root");
mysqli_select_db($conexion, "haruki_store");

$id = $_GET['id'];
$consulta = "SELECT * FROM productos WHERE id=$id";
$respuesta = mysqli_query($conexion, $consulta);
$datos = mysqli_fetch_array($respuesta);
?>

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
      <a class="navbar-brand-light" href="./index.html">Haruki Store</a>
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
              <a class="dropdown-item" href="./buzos.php">Buzos</a>
              <a class="dropdown-item" href="./camperas.php">Camperas</a>
              <!-- <a class="dropdown-item" href="./pantalones.php">Pantalones</a> -->
              <a class="dropdown-item" href="./polleras.php">Polleras</a>
              <a class="dropdown-item" href="./remeras.php">Remeras</a>
              <a class="dropdown-item" href="./shorts.php">Shorts</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-white" href="./index.html#contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-white" href="./index.html#contact-me">Escríbeme</a>
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
      <h2> <strong>Editar Producto</strong></h2>
    </div>
    <div class="container">

      <?php
      // Asignamos a diferentes variables los respectivos valores del array $datos.
      $id = $datos["id"];
      $tipo_prenda = $datos["tipo_prenda"];
      $marca = $datos["marca"];
      $talle = $datos["talle"];
      $precio = $datos["precio"];
      $imagen = $datos['imagen']; ?>

      <!-- *** Product Cards *** -->
      <div class="page-content page-container mt-4" id="page-content">
        <div class="padding">
          <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
              <div class="card product-card-full">
                <div class="row m-l-0 m-r-0">
                  <div class="col-sm-4 bg-c-lite-green product-profile">
                    <div class="card-block text-center text-white">
                      <div class="m-b-25">
                        <img src="data:image/jpg;base64, <?php echo base64_encode($datos['imagen']) ?>" class="img-radius" alt="Product-Image">
                      </div>
                      <h6 class="f-w-600">ID: <?php echo "$id"; ?></h6>
                    </div>
                  </div>
                  <div class="col-sm-8">

                    <form class="form-card mt-3" action="" method="post" enctype="multipart/form-data">
                      <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                          <label class="form-control-label px-3">Tipo de Prenda</label>
                          <input type="text" id="tipo_prenda" name="tipo_prenda" placeholder="Tipo de prenda" value="<?php echo "$tipo_prenda"; ?>" onblur="validate(1)">
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                          <label class="form-control-label px-3">Marca</label>
                          <input type="text" id="marca" name="marca" placeholder="Marca" value="<?php echo "$marca"; ?>" onblur="validate(2)">
                        </div>
                      </div>

                      <div class="row justify-content-between text-left mt-3">
                        <div class="form-group col-sm-6 flex-column d-flex">
                          <label class="form-control-label px-3">Talle</label>
                          <input type="text" id="talle" name="talle" placeholder="Talle" value="<?php echo "$talle"; ?>" onblur="validate(3)">
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                          <label class="form-control-label px-3">Precio</label>
                          <input type="text" id="precio" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>" onblur="validate(4)">
                        </div>
                      </div>

                      <div class="row justify-content-between text-left mt-3">
                        <div class="form-group flex-column d-flex ">
                          <label class="form-control-label px-3">Cambiar imagen</label>
                          <input type="file" name="imagen" placeholder="imagen" class="no-uppercase"><br>
                        </div>
                      </div>


                      <div class="row justify-content-end mb-3">
                        <div class="form-group col-sm-6 flex-column d-flex">    
                          <button type="submit" name="Cancelar" formaction="productos.php" class="btn-block btn-danger btn-mini">Cancelar</button>                                                
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                        <input type="submit" name="guardar_cambios"  class="btn-block btn-primary btn-mini" value="Guardar Cambios">
                        </div>
                      </div>
                    </form>

                    <?php
                    // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
                    if (array_key_exists('guardar_cambios', $_POST)) {

                      $tipo_prenda = $_POST['tipo_prenda'];
                      $marca = $_POST['marca'];
                      $talle = $_POST['talle'];
                      $precio = $_POST['precio'];
                      
                      if($_FILES['imagen'] == null | $_FILES['imagen'] == ''){
                        $imagen = $datos['imagen']; 
                      } else {
                        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
                      }

                      $consulta = "UPDATE productos SET tipo_prenda='$tipo_prenda', marca='$marca', talle='$talle', precio='$precio', imagen='$imagen' WHERE id ='$id'";
                      
                      mysqli_query($conexion, $consulta);
                      header('location: productos.php');
                    } ?>
                  </div>
                </div>
              </div>
            </div>
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
  <footer id="footer-purple-fixed">
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
  <script src="./assets/js/validate.js"></script>

  <!-- Script para envío de emails con EmailJS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
  <script src="https://cdn.emailjs.com/dist/email.min.js" type="text/javascript"></script>
  <script src="./assets/js/email-confirmation.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>