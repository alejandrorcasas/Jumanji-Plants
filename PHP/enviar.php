<?php
// Conexión a la base de datos
include ("../conexion.php");

// Recibe datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];


// Inserta datos en la base de datos
$sql = "INSERT INTO inbox (nombre, apellidos, email,  telf, mensaje ) VALUES ('$nombre', '$apellidos', 
'$email', '$telefono', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// Fin  conexión
$conexion->close();
?>