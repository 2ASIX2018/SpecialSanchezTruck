<?php

require("models/usuari.php");

$unam=$_REQUEST["nombreusuario"];
$nom=$_REQUEST["nombre"];
$apll=$_REQUEST["apellidos"];
$passw=$_REQUEST["password"];
$email=$_REQUEST["email"];
$direc=$_REQUEST["direccion"];
$dni=$_REQUEST["dni"];
$tlf=$_REQUEST["telefono"];
$cit=$_REQUEST["ciutat"];
$pais=$_REQUEST["pais"];
$prov=$_REQUEST["provincia"];
$cod=$_REQUEST["codpostal"];
$rol="user";


$articulo=new Usuari();
$articulo->altaUsuari($unam, $nom, $apll, $email, $passw, $direc, $dni, $tlf, $cit, $cod, $pais, $prov, $rol);

#header("Location: index.php");


?>