<?php

session_start();
if(!isset($_SESSION["username"])) header("Location: index.php");

    $_SESSION = array();

if(isset($_COOKIE["SstUser"])){

    setcookie("SstUser", null, time()-3600);

}
if(isset($_COOKIE["SstRole"])){

    setcookie("SstRole", null, time()-3600);

}

if(isset($_COOKIE[session_name()])){
    setcookie(session_name(), '', time() - 42000, '/');
} 


session_destroy();

header("Location: index.php");
exit();

?>

