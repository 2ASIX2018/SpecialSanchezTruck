<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SST Productos</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

    <link href="css/submenu.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    
    <?php require_once("menu.php"); ?>

    <div class="container">

      <h1 class="my-4">
          Productos
      </h1>

      <div class="row">

      <?php

        require_once("models/productos.php");
        $gestorArticulos=new Articulo();
        $articulos=$gestorArticulos->listaProd();

        for($i=0; $i<count($articulos); $i++)
        {
          if ($articulos[$i]["idcat"]==1)
          {
          ?>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a><img class="card-img-top" src="<?php echo( $articulos[$i]["nimagen"]);?>"><a>

            <div class="card-body">
              <h4 class="card-title"> <?php echo( $articulos[$i]["nombre"]); ?></h4>
              <p class="card-text"><?php echo ($articulos[$i]["descripcion"]); ?></p>
              <h4 class="card-title"> <?php echo( $articulos[$i]["precio"]); ?>€</h4>
            </div>
          </div>
        </div>

        <?php 
          } 
        }
        #}  
        ?>

      </div>

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
      </div>
    </div-->
</div>

    <!-- Footer -->
    
    <?php require_once("footer.php"); ?>

  </body>
  
</html>