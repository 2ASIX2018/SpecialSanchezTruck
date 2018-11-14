<?php

  session_start();

  $user="Anonimo";
  $role="";

  if (isset($_SESSION['username'])){

    $user=$_SESSION['username'];

    if (isset($_SESSION['role']) && $_SESSION['role']=="admin") $role="(admin)"; 
    
    else  $role="";

  } else if (isset($_COOKIE['SstUser'])){

      $_SESSION['username'] = $_COOKIE['SstUser'];

      if (isset($_COOKIE['SstUser'])) $_SESSION['role'] = $_COOKIE['SstUser'];

      if ($_SESSION['role']=="admin") $role="(admin)"; else $role="";
      
      $user=$_SESSION['username']; 

  }

  $nomusu=$user#.$role;
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Special Sanchez Truck</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Principal
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="prinproductos.php">Productos</a>
            </li>
            
            <!--?php if(isset($_SESSION['username'])){ ?-->
            
              <li class="nav-item">
                <a class="nav-link" href="prindecorados.php">Decorados</a>
              </li>

            <!--?php } ?-->
            
            <?php if($role=="(admin)"){ ?> 
            <li class="nav-item">
                <a class="nav-link" href="introdprod.php">Introducir Productos</a>
              </li>
            <?php } ?>

            <?php if($user=="Anonimo"){ ?>
              <li class="nav-item">
                <a class="nav-link" href="loginForm.php">Acceder</a>
              </li>
            <?php } else { ?>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Cerrar Session</a>
              </li>
            <?php } ?>

            <?php if($user!="Anonimo"){ ?> 
            <li class="nav-item">
                <a class="nav-link" href="#">
                  <?php echo($nomusu) ?>
                </a>
              </li>
            <?php } ?>


                        
          </ul>
        </div>
      </div>
</nav>