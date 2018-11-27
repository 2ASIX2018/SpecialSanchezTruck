<?php
class Articulo{
    
    public function NumArticulos(){
        try{
            // Retorna el número de notícies en total
            // Fem la connexió
            require_once("conexio.php");
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            
            // Preparem la consulta
            $consulta = $dbCon->prepare('SELECT count(*) FROM Productos');
            
            // Executem la consulta
            $consulta->execute();
            $articulos=array();
            // Agafem el resultat
            $fila=$consulta->fetch();
            // Tanquem la connexió
            $dbCon=null;
            // tornem el resultat
            return $fila[0];
        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }
    }

    public function listaarticulos(){
        try{
            require_once("conexio.php");
            
            // Fem la connexió
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            
            // Preparem la consulta
            $consulta = $dbCon->prepare('SELECT idarticulo, Nombre, Descripcion, Precio, Imagen, idCat_Prod FROM Productos ORDER BY idarticulo');
            
            // Executem la consulta
            $consulta->execute();
            $articulos=array();
            // Agafem els resultats amb un bucle i els afegim a l'array de noticies
            while($fila=$consulta->fetch()){
                $articulo["id"]=$fila[0];
                $articulo["nombre"]=$fila[1];
                $articulo["descripcion"]=$fila[2];
                $articulo["precio"]=$fila[3];
                $articulo["imagen"]=$fila[4];
                $articulo["idcat"]=$fila[5];
                array_push($articulos, $articulo);
            }
            
            // Tanquem la connexió
            $dbCon=null;
            // tornem els resultats
            return $articulos;
            
        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }
    }

}



?>