<?php
  $conexion = mysqli_connect($configs->host, $configs->username, $configs->pass);
  mysqli_select_db($conexion, $configs->db);
  $id = $_GET['id'];

  $consulta = "DELETE FROM productos WHERE id='$id'";

  mysqli_query($conexion,$consulta);
  header('location: productos.php');
?>
