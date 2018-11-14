<html>

<body>

<h1>Datos del Formulario de Registro de Productos.</h1>

<?php

echo ("<p>Nombre Producto ".$_REQUEST["nombreproducto"]."</p>");
echo ("<p>Descripcion: ".$_REQUEST["descripcion"]."</p>");
echo ("<p>Precio: ".$_REQUEST["precio"]."</p>");
echo ("<p>Password introducido: ".$_REQUEST["password"]."</p>");
echo ("<p>Imagen: ".$_REQUEST["imagensub"]."</p>");
echo ("<p>Categoria: ".$_REQUEST["categoria"]."</p>");

?>


</body>
</html>