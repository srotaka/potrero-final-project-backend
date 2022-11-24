<?php
    $conexion = mysqli_connect("127.0.0.1", "root", "root");
    mysqli_select_db($conexion, "haruki_store");
    $sesionEmail = $_POST['email'];
    $sesionPassword = $_POST['password'];

    session_start();
    $_SESSION["email"] =$sesionEmail; 
    
    $consulta = "SELECT * FROM usuarios WHERE email='$sesionEmail' AND password='$sesionPassword'";
    $datos = mysqli_query($conexion, $consulta);
    $row = mysqli_num_rows($datos);
    
    $reg = mysqli_fetch_array($datos);    
    
    if($row){       
        $_SESSION["nombreCompleto"] = $reg['nombre'].' '.$reg['apellido'];
        header("location:./index.php");
    } else {
        header("location:./error.html");
    }

?>
