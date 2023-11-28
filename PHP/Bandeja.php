<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/Bandeja.CSS">
	<link rel="preconnect" href="https://fonts.googleapis.com"><!-- Google font h1  -->
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><!-- Google font  -->
   <link rel="preconnect" href="https://fonts.googleapis.com"><!-- Google font h2  -->
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><!-- Google font h2  -->
   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lobster&display=swap" rel="stylesheet"><!--  Google font h2  -->
	<title>Bandeja</title>
</head>
<body>
<?php
// Establecer la conexión a la base de datos (reemplaza con tus propios detalles de conexión)
$servidor = "localhost";
  $usuario = "root";
  $password = "";
  $nombreBD = "jumanjiplants";

  $conexion = new mysqli($servidor, $usuario, $password, $nombreBD);


// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Consulta SQL para seleccionar todos los datos de la tabla "inbox"
$consulta = "SELECT * FROM inbox";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

// Comprobar si la consulta se ejecutó correctamente
if (!$resultado) {
    die("Error en la consulta: " . $conexion->error);
}

// Mostrar los datos en una tabla HTML (puedes personalizar esto según tus necesidades)
echo "<table border='1'>
        <tr>
            <th>Ref</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Mensaje</th>
            <th>Fecha</th>
            
        </tr>";

while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>
            <td>" . $fila['ref'] . "</td>
            <td>" . $fila['nombre'] . "</td>
            <td>" . $fila['apellidos'] . "</td>
            <td>" . $fila['email'] . "</td>
            <td>" . $fila['telf'] . "</td>
            <td>" . $fila['mensaje'] . "</td>
            <td>" . $fila['date'] . "</td>
            
          </tr>";
}

echo "</table>";

// Cerrar la conexión
$conexion->close();
?>
</main>
	
    </body>
    </html>