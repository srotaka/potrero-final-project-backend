<?php
  $conexion = mysqli_connect("127.0.0.1", "root", "root");
  mysqli_select_db($conexion, "haruki_store");
  $id = $_GET['id'];

  $consulta = "DELETE FROM productos WHERE id='$id'";

  mysqli_query($conexion,$consulta);
  header('location: productos.php');
?>
