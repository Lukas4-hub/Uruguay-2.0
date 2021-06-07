<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Carlos Seguessa, Lucas Beltrame, Franco Piñeiro">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimun-scale=100% ,maximun-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="mediaQueries.css">
    <title>Visita Uruguay</title>
</head>
<body>
    
<header>
    <nav class="navbar">
<img src="img/logo.png" class="logo" alt="logo">
<ul class="menu">
    <li>
        <a href="index.html">Inicio</a>
    </li>
    <li>
        <a href="lugpair.html">Lugares para ir</a>
    </li>

        <li><a href="formulario.html">Contacto</a>
    </li>
</ul>
<div class="menu-bar">
    <i class="fas fa-bars"></i>
</div>
    </nav>
</header>

<main id="contenido">
         
<form method="post"       action="formulario.php"> 
    <h1>Contactanos</h1>
    
    
    <input type="text" name="nombre" value="<?php  if (isset($_POST['nombre'])) {
        echo $_POST['nombre'];
    }?>" placeholder="Nombre">
   
    <input type="text" name="apellido" value="<?php  if (isset($_POST['apellido'])) {
        echo $_POST['apellido'];
    }?>" placeholder="Apellido">
    <br>
         
     
 
    <input class="mail" type="email" name=mail2 value="<?php  if (isset($_POST['mail2'])) {
        echo $_POST['mail2'];
    }?>" placeholder="Email">
    <br>
    <input type="text" class="mensaje" name="mensaje" placeholder="Escriba su mensaje aqui"><br>
    <input type="submit" class="boton" name="bot">
          
  <?php
  include('procesar.php');
   include ('correo.php');
  ?>
  </form>
</main>




    <script src="assets/js/script1.js"></script>
</body>
</html>
