<?php

    session_start();

        if(!isset($_SESSION["username"]) ||  !isset($_SESSION["role"])  || $_SESSION["role"]!="admin") header("Location: index.php");

?>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SPECIAL SANCHEZ TRUCK</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/registro.css" rel="stylesheet">

    <link href="css/submenu.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    
    <?php require_once("menu.php"); ?>

    <!-- Formulario -->
    
    <div class="container">
      <div class="containerreg">
        <?php require_once("formintroddec.php"); ?>
      </div>
    </div>

    <!-- Footer -->
    
    <?php require_once("footer.php"); ?>

  </body>
  
</html>