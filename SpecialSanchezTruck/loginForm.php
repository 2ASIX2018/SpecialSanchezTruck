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
    <link href="css/login.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    
    <?php require_once("menu.php"); ?>

        <div class="containerlog">
            <div class="card card-container">
                <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <p id="profile-name" class="profile-name-card"></p>
                <form action="login.php" class="form-signin" method="get">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" name="inputUser" class="form-control" placeholder="Usuario" required autofocus>
                    <input type="password" name="inputPassword" class="form-control" placeholder="Contraseña" required>
                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="recuerdame" name="recuerdame"> Recuerdarme
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Acceder</button>
                </form><!-- /form -->
                <a href="#" class="forgot-password">
                    Has olvidado la contraseña?
                </a>
                
                <a href="registro.php" class="forgot-password">
                    No estas registrado?
                </a>

            </div><!-- /card-container -->
        </div>

    <!-- Footer -->
    
    <?php require_once("footer.php"); ?>

  </body>
  
</html>