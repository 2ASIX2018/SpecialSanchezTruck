<!DOCTYPE html>
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
    <link href="css/3-col-portfolio.css" rel="stylesheet">

    <link href="css/submenu.css" rel="stylesheet">

    <!--?php
    require_once("models/productos.php");
    $gestorArticulos=new Articulo();
    $num_articulos=$gestorArticulos->NumArticulos();
    #echo ($articulos);
    #$pagina_actual=0; // Per defecte mostrarem la pàgina 1 de resultats
    // Comprovem si ens demanen una pàgina de resultats concreta
    ?-->

  </head>

  <body>

    <!-- Navigation -->
    
    <?php require_once("menu.php"); ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Novedades
        <small>Productos</small>
      </h1>

      <!--div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="imagenes/pagprincipal/defensa.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Defensa delantera</a>
              </h4>
              <p class="card-text">Personalizable con varios colores.</p>
              <p class="card-text">Recomendada Para Scania R, R2, Streamline y Nextgen.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="imagenes/pagprincipal/HELLA_Offroad_Luminator_LED.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Foco Auxiliar Led Hella</a>
              </h4>
              <p class="card-text">Ofrece gran alcance.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="imagenes/pagprincipal/tapon_rueda.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Tapon cromado</a>
              </h4>
              <p class="card-text">Tapon Cromado para los tornillos de las ruedas.</p>
              <p class="card-text">El diametro compatible es de 32mm</p>
            </div>
          </div>
        </div->

      </div-->
      <div class="row">
      <?php

        require_once("models/productos.php");
        $gestorArticulos=new Articulo();
        #$articulos=$gestorArticulos->listaArticulos();
        $articulos=$gestorArticulos->RangoArtProd();

        #$num_articulos=$gestorArticulos->NumArticulos();
        //$pagina_actual=0; // Per defecte mostrarem la pàgina 1 de resultats
        // Comprovem si ens demanen una pàgina de resultats concreta
        #if(isset($_REQUEST["pg"])) $pagina_actual=$_REQUEST["pg"];
        #$articulos_por_pagina=6;

        

        #if (count($articulos)>0){
        #for($i=0; $i<count($articulos); $i++)
        for($i=0; $i<count($articulos); $i++)
        {
          if ($articulos[$i]["idcat"]==1)
          {
          ?>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a><img class="card-img-top" src="<?php echo( $articulos[$i]["nimagen"]);?>"><a>
          <!--a href="#"><img class="card-img-top" src="imagenes/pagprincipal/scania_weeda.jpg" alt=""></a-->
            <div class="card-body">
              <h4 class="card-title"> <?php echo( $articulos[$i]["nombre"]); ?></h4>
              <p class="card-text"><?php echo ($articulos[$i]["descripcion"]); ?></p>
              <h4 class="card-title"> <?php echo( $articulos[$i]["precio"]);?>€</h4>
            </div>
          </div>
        </div>

        <?php 
          } 
        }
        #}  
        ?>


      </div>

    <div class="container">

      <h1 class="my-4">Ultimos
        <small>Decorados</small>
      </h1>


      <!--div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="imagenes/pagprincipal/scania_weeda.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Weeda</a>
              </h4>
              <p class="card-text">
                Scania R490 Streamline Normal 6x2
                <br>
                Pais: Paises bajos.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="imagenes/pagprincipal/scania_jjtransport.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">J&J Transport</a>
              </h4>
              <p class="card-text">
                Scania Serie 4 164L 580 V8 6x4
                <br>
                Pais: Paises bajos.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="imagenes/pagprincipal/scania_ravon.jpeg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Ravon Thermo Express</a>
              </h4>
              <p class="card-text">
                Scania S520 V8 Highline 4X2
                <br>
                Pais: Francia.
              </p>
            </div>
          </div>
        </div>
      </div-->

        <div class="row">
      <?php

        require_once("models/productos.php");
        $gestorArticulos=new Articulo();
        #$articulos=$gestorArticulos->listaArticulos();
        $articulos=$gestorArticulos->RangoArtDec();

        for($i=0; $i<count($articulos); $i++)
        {
          if ($articulos[$i]["idcat"]==2)
          {
          ?>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a><img class="card-img-top" src="<?php echo( $articulos[$i]["nimagen"]);?>"><a>
          <!--a href="#"><img class="card-img-top" src="imagenes/pagprincipal/scania_weeda.jpg" alt=""></a-->

          <?php
          if ($user!="Anonimo"){
            ?>
          <div>  
          <p class="clasificacion">
            <input id="radio1" type="radio" name="estrellas" value="5">
            <label for="radio1">★</label>
            <input id="radio2" type="radio" name="estrellas" value="4">
            <label for="radio2">★</label>
            <input id="radio3" type="radio" name="estrellas" value="3">
            <label for="radio3">★</label>
            <input id="radio4" type="radio" name="estrellas" value="2">
            <label for="radio4">★</label>
            <input id="radio5" type="radio" name="estrellas" value="1">
            <label for="radio5">★</label>
          </p>
          </div>
          <?php
          }
          ?>
          
            <div class="card-body">
              <h4 class="card-title"> <?php echo( $articulos[$i]["nombre"]); ?></h4>
              <p class="card-text"><?php echo ($articulos[$i]["descripcion"]); ?></p>
            </div>
          </div>
        </div>

        <?php 
          } 
        }
          
        ?>


      </div>

      </div>
      <!-- /.row -->

      <!-- Pagination>
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul-->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    
    <?php require_once("footer.php"); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

