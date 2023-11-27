<!DOCTYPE html>
<head>
	<title>Verificación Usuario y Contraseña</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "jumanjiplants";

$conn = new mysqli('localhost', 'root', '', 'jumanjiplants');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuario WHERE User = '" . $_POST["User"] . "' AND Pass = '" . $_POST["Pass"] . "'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    //echo "<h2>Usuario y Contraseña correctos</h2>";
    // session_start();

    $_SESSION["User"]=$_POST["login"];
    header("Location:MiCuenta.php");

} else {
    echo "<h2>El usuario o la contraseña son incorrectos</h2>";
}

$conn->close();
?>

</body>
