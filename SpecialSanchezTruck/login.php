<?php

session_start();

    
    require_once("models/usuari.php");
    
    $usuari=new Usuari();
    

    $user=$_REQUEST["inputUser"];
    $pass=$_REQUEST["inputPassword"];
    $recordar=$_REQUEST["recuerdame"];
    
    $role=$usuari->validaUsuari($user, $pass);
    
    if ($role){
    
    $_SESSION['username']=$user;
    $_SESSION['role'] = $role;


    if ($recordar=="recuerdame"){

        setcookie('SstUser', $_SESSION['username'], time() + 365 * 24 * 60 * 60);
        setcookie('SstRole', $_SESSION['role'], time() + 365 * 24 * 60 * 60);
    
    }

    header("Location: index.php");
    exit();

} else {
?>

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
    Usuario no encontrado pruebe de nuevo.
    </div>
    <a href="loginForm.php">Volver a intentar</a>
    </div>
  <?php require_once("footer.php"); ?>    
</body>

</html>
<?php } ?>