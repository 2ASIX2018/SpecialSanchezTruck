<html>
<head>

  <meta charset="utf-8">
  <title>SST</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/3-col-portfolio.css" rel="stylesheet">

</head>

<body>
    <div class="container" style="margin-top:10em; margin-bottom:10em">
    <div class="alert alert-danger">
      <?php 
      echo ($alerta=$_REQUEST["alerta"]);      
      ?>
    </div>
    <a href="registro.php">Volver a intentar</a>
    </div>
  <?php require_once("footer.php"); ?>    
</body>

</html>