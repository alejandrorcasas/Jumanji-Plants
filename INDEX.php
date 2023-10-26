
<?php session_start();

include ("conexion.php");

 ?>


<!DOCTYPE html>
 <html>
  <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="CSS/JumanjiPlants.CSS"> <!-- CSS -->
   <link rel="preconnect" href="https://fonts.googleapis.com"><!-- Google font h1  -->
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><!-- Google font  -->
   <link rel="preconnect" href="https://fonts.googleapis.com"><!-- Google font h2  -->
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><!-- Google font h2  -->
   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lobster&display=swap" rel="stylesheet"><!--  Google font h2  -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> <!--BOOTSTRAP -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><!--Libreria Ajax  -->
 <!-- BIBLIOTECA SWEETALERT -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!-- <link rel="stylesheet" href="css/sweetalert2.min.css"> -->
   <script src="js/sweetAlert.js"></script>

   
 <title>JumanjiPlants</title>

  </head>



<body>

 
 <header class="header" >

   <!-- Logo -->
       <div name="logo">
          <img src="Fotos\Logo.png" class="logo" >
    </div>
   <!-- Sesión de usuario -->
    <div class="Sesion">
      <a href=""> 
       <img src="Fotos/usuario.png" target = "_blank" > 
      </a>
    </div>
  

  
   <!-- Titulo -->
    <div class="titulo">
      <h1>Jumanji Plants</h1>
        <h2>"Un pedacito de jungla en tu casa" </h2>
    </div>
    


<!-- Navbar -->  
     <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4DBF82;" >
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="#QuienesSomos">Quienes Somos</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#Productos">Productos</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#Contacto">Contacto</a>
          </li>
       </ul>
      </div>
      </nav>
<!-- Fin Navbar -->  

<!-- ESPACIO NAVBAR -->
       <div class="blanco">
       </div>
<!-- FIN ESPACIO NAVBAR -->


<!-- ESPACIO EN BLANCO -->
<div class="blanco">
       </div>
<!-- FIN ESPACIO EN BLANCO -->
 </header> 





<main class="contenido">
<!-- SLIDER FOTOS -->
      <div class="slider">
         <ul>
            <li> <img src="Fotos/Domo.png"> </li>
            <li> <img src="Fotos/Kokedama.png"> </li>
            <li><img src="Fotos/Tillandsia.png"></li>
            <li><img src="Fotos/Crasas.png"></li>
         </ul>

      </div>

    
<!-- FIN SLIDER FOTOS -->

<!-- ESPACIO EN BLANCO -->
   <div class="blanco">
   </div>
<!-- FIN ESPACIO EN BLANCO -->

<!-- Quienes Somos -->

      <section id="QuienesSomos">
       <div class="QuienesSomos">
        <h1> Quienes somos. </h1>
        <hr>

        <p> 
        En "Jumanji Plants", nuestra misión es acercar la belleza y la serenidad de la naturaleza a los espacios interiores de las personas, 
        enriqueciendo sus vidas a través de la presencia de plantas de interior y kokedamas. Nos esforzamos por ofrecer una amplia 
        variedad de plantas cuidadosamente seleccionadas y kokedamas artesanales que no solo añaden un toque de verdor a los hogares 
        y espacios de trabajo,sino que también promueven la conexión con la naturaleza y mejoran la calidad de vida.</p>
        
        <div class="container mt-5 mb-5">
          <div class="row">
           <div class="col-md-6">
           <img src="Fotos/ManosKokedama.png" alt="Imagen" class="img-fluid">
          </div>
        <div class="col-md-6">
         <p style="margin-left: 10%;">Estamos comprometidos a brindar a nuestros clientes productos de alta calidad y el conocimiento necesario 
          para mantener sus plantas y kokedamas saludables y felices. Además, buscamos contribuir de manera sostenible 
          a la preservación del medio ambiente, promoviendo prácticas de cultivo responsable y utilizando 
         materiales ecológicos en nuestros productos.</p>
        </div>
        </div>
       </div>
      <p>Nuestra visión en "Jumanji Plants" es convertirnos en el referente líder en el mundo de las plantas de interior y kokedamas.
           Queremos inspirar a las personas a llenar sus espacios con la exuberante belleza de la naturaleza, generando un impacto positivo
           en sus vidas y en el medio ambiente.Nos esforzamos por ser reconocidos como una empresa innovadora, respetuosa con el entorno 
           y centrada en el cliente, capaz de satisfacer las necesidades y deseos de nuestros clientes con una oferta diversificada y
           de alta calidad.</p>
           <div class="container mt-5 mb-5">
              <div class="row">
               <div class="col-md-6">
                <p style="margin-right: 10%;">  Aspiramos a ser pioneros en la creación de tendencias de diseño interior que incorporen elementos vegetales,
           reforzando la conexión entre la naturaleza y el ser humano en un mundo cada vez más urbano.
           </p>
                
          </div>
        <div class="col-md-6">
           <img src="Fotos/composicion.png" alt="Imagen" class="img-fluid">
           </div>
    </div>
    </div>
           <p>En "Jumanji Plants", nuestros valores son la base de todo lo que hacemos. Creemos en:  </p>
<!-- ESPACIO EN BLANCO -->
  <div class="blanco">
  </div>
<!-- FIN ESPACIO EN BLANCO -->

          <ul>
            <li><strong>Pasión por la naturaleza:</strong> Amamos y respetamos el mundo natural, y
               buscamos compartir esa pasión con nuestros clientes a través de nuestras plantas y kokedamas.</li>
            <li><strong>Pasión por la naturaleza:</strong> Amamos y respetamos el mundo natural,
               y buscamos compartir esa pasión con nuestros clientes a través de nuestras plantas y kokedamas.</li>
            <li><strong>Calidad y Sostenibilidad:</strong> Nos comprometemos a ofrecer productos de la más alta calidad,
               cultivados y elaborados de manera sostenible, reduciendo nuestro impacto ambiental.</li>
            <li><strong>Servicio al Cliente:</strong> La satisfacción del cliente es nuestra prioridad,
               y nos esforzamos por brindar un servicio excepcional, asesoramiento experto y soluciones a medida.</li>
            <li><strong>Innovación: </strong>Fomentamos la creatividad y la innovación en el desarrollo de nuestros productos y
               en la búsqueda constante de nuevas formas de enriquecer la vida de las personas a través de la naturaleza.</li>
            <li><strong>Ética y Responsabilidad:</strong> Actuamos con integridad, respetando los principios éticos en todas nuestras interacciones, 
              desde la adquisición de nuestras plantas hasta la relación con nuestros colaboradores y comunidades.</li>
          </ul>
          <br>
          <p>En "Jumanji Plants," estamos dedicados a llevar la naturaleza a tu interior de una manera única y significativa.
             Nuestra misión, visión y valores guían nuestro compromiso de enriquecer tu vida 
             y el planeta a través de la belleza y la serenidad que solo la naturaleza puede ofrecer.</p>


      </div>
    </section>
      

    <!-- ESPACIO EN BLANCO -->
     <div class="blanco">
    </div>
<!-- FIN ESPACIO EN BLANCO -->



<!-- ESPACIO EN BLANCO -->
<div class="blanco">
       </div>
<!-- FIN ESPACIO EN BLANCO -->
<!-- FOOTER -->
<footer id="PiePagina">
    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <p>Todos los derechos reservados © 2023</p>
          </div>
          <div class="col-md-6">
             <p>Diseñado por: Alejandro Ros Casas</p>
          </div>
       </div>
    </div>
 </footer>
<!-- FIN FOOTER -->



</main>

<!-- Agrego biblioteca JavaScript -->
<script src="js\jQuery 3.7.0.js"></script>
  <!-- Agrego libreria "SweetAlert2" -->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <!-- Agrega los estilos de SweetAlert -->
<!-- <link rel="stylesheet" href="css/sweetalert2.min.css"> -->
 <script src="js/sweetAlert.js"></script>
  </body>
 </html>
