<?php
    $configs = include('config.php');
    $conexion = mysqli_connect($configs->host, $configs->username, $configs->pass);
    mysqli_select_db($conexion, $configs->db);
    $sesionEmail = $_POST['email'];
    $sesionPassword = $_POST['password'];

    session_start();
    
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
