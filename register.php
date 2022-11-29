<?php
    $conexion = mysqli_connect($configs->host, $configs->username, $configs->pass);
    mysqli_select_db($conexion, $configs->db);

    $registerName = $_POST['nombre'];
    $registerLastname = $_POST['apellido'];
    $registerEmail = $_POST['email'];
    $registerPassword = $_POST['userPassword'];
    $registerRepeatPassword = $_POST['repeatPassword'];

    session_start();
        
    $consulta = "SELECT * FROM usuarios WHERE email='$registerEmail'";
    $datos = mysqli_query($conexion, $consulta);
    $row = mysqli_num_rows($datos);
    
    $reg = mysqli_fetch_array($datos);    
    
    if($row){  
        header("location:./error.html"); 
    } else {
        $consulta2 = "INSERT INTO usuarios (id, nombre, apellido, email, password) VALUES (NULL, '$registerName', '$registerLastname', '$registerEmail', '$registerPassword')";        
        $_SESSION["nombreCompleto"] = $registerName. ' ' .$registerLastname;
        mysqli_query($conexion, $consulta2);
        header("location:./index.php");
    }

?>