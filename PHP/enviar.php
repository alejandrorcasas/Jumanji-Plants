<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
    <!-- Incluye SweetAlert desde el CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

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
$sql = "INSERT INTO inbox (nombre, apellidos, email,  telf, mensaje) 
        VALUES ('$nombre', '$apellidos', '$email', '$telefono', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    // Registro exitoso, muestra SweetAlert y redirige a la misma página
    echo "<script>
            Swal.fire({
                title: 'Formulario enviado con éxito',
                text: '¡Gracias!',
                icon: 'success',
                confirmButtonText: 'Ok'
            }).then(function() {
                window.location.href = '../INDEX.php';  // Redirige a la misma página
            });
          </script>";
} else {
    // Error al registrar datos
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// Fin  conexión
$conexion->close();
?>

<!-- Resto de tu código HTML... -->

</body>
</html>
