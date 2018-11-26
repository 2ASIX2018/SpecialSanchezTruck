<html>

<body>

<h1>Datos del Formulario de Registro.</h1>

<?php

echo ("<p>Nombre de usuario: ".$_REQUEST["nombreusuario"]."</p>");
echo ("<p>Nombre: ".$_REQUEST["nombre"]."</p>");
echo ("<p>Apellidos: ".$_REQUEST["apellidos"]."</p>");
echo ("<p>Password introducido: ".$_REQUEST["password"]."</p>");
echo ("<p>Email: ".$_REQUEST["email"]."</p>");
echo ("<p>Direccion: ".$_REQUEST["direccion"]."</p>");
echo ("<p>DNI: ".$_REQUEST["dni"]."</p>");
echo ("<p>Telefono: ".$_REQUEST["telefono"]."</p>");
echo ("<p>Ciudad: ".$_REQUEST["ciutat"]."</p>");
echo ("<p>Pais: ".$_REQUEST["pais"]."</p>");
echo ("<p>Provincia: ".$_REQUEST["provincia"]."</p>");
echo ("<p>CD postal: ".$_REQUEST["codpostal"]."</p>");

?>


</body>
</html>