<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/JumanjiPlants.CSS">
	<link rel="preconnect" href="https://fonts.googleapis.com"><!-- Google font h1  -->
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><!-- Google font  -->
   <link rel="preconnect" href="https://fonts.googleapis.com"><!-- Google font h2  -->
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><!-- Google font h2  -->
   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lobster&display=swap" rel="stylesheet"><!--  Google font h2  -->
	<title>MiCuenta</title>
</head>
<body>
<?php
    
	// session_start();
	// if(!isset($_SESSION["Usuario"])){
 	// 	header("Location:MiCuenta.php");
 	// 	exit();
	// }
?>
<header>
<!-- Logo -->
		 <div name="logo">
          <img src="../Fotos/Logo.png" class="logo" >
         </div>
<!-- Titulo -->
		 <div class="titulo">
           <h1>Jumanji Plants</h1>
           <h2>"Un pedacito de jungla en tu casa" </h2>
         </div>	
</header>

<main>
	<div class="micuenta">
	
	

		

<!-- Navbar -->  
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4DBF82;" >
       <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="Bandeja.php" target="iframeizq">Bandeja de entrada</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#pedidos">Pedidos</a>
          </li>
          
       </ul>
      </div>
      </nav>
<!-- Fin Navbar -->  

<!-- ESPACIO NAVBAR -->
<div class="blanco">
       </div>
<!-- FIN ESPACIO NAVBAR -->
<h1>BIENVENIDO A TU CUENTA PERSONAL!!</h1>

<!-- BOX PRINCIPAL -->
<div class="box">
<!-- BOX IZQUIERDA -->
		<div class="box_izq">
			<iframe id="iframeizq" name="iframeizq" >
            </iframe>
		</div>
<!-- BOX DERECHA -->
		<div class="box_der">
			<iframe></iframe>
		</div>
	</div>
	</div>
</main>
	
</body>
</html>