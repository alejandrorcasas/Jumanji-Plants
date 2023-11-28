<?php 
  //Conexion

  $servidor = "localhost";
  $usuario = "root";
  $password = "";
  $nombreBD = "jumanjiplants";

  $conexion = new mysqli($servidor, $usuario, $password, $nombreBD);

  if ($conexion->connect_error){
  die("La conexión ha fallado " . $conexion->connect_error);
  // echo "algo va mal"; Para testear conexion, habilitar.
  }else{
  //  echo "Todo ha salido bien";
  }
?>