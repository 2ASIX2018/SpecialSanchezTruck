<?php

require("models/productos.php");
#$target_dir = "imagsubidas/";
#$target_file = $target_dir . basename($_FILES["imagensub"]["name"]);

$nombre=$_REQUEST["nombreproducto"];
$desc=$_REQUEST["descripcion"];
$precio=$_REQUEST["precio"];
$cat=1;

/*echo ("<p>Nombre Producto ".$_REQUEST["nombreproducto"]."</p>");
echo ("<p>Descripcion: ".$_REQUEST["descripcion"]."</p>");
echo ("<p>Precio: ".$precio."</p>");
echo ("<p>Imagen: ".$_REQUEST["imagensub"]."</p>");
echo ("<p>Categoria: ".$cat."</p>");

echo ("<p>Ubicacion imagen: ".$target_file."</p>");*/


$articulo=new Articulo();
$articulo->aarticulo($nombre, $desc, $precio, $cat);

header("Location: index.php");
/*$tmp_file=$_FILES["imagensub"]["tmp_name"];
echo ("<p>Almacenamiento temporal: ".$tmp_file."</p>");

if (move_uploaded_file($tmp_file, $target_file)) {
    echo "La imagen ". basename($target_file). " se a subido.";
} else {
   echo "Se a producido algun error subiendo la imagen.";
}*/

?>