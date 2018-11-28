<?php
class Articulo{
    
    public function NumArticulos(){
        try{
            // Retorna el número de notícies en total
            // Fem la connexió
            require("conexio.php");
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
            require("conexio.php");
            
            // Fem la connexió
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            
            // Preparem la consulta
            $consulta = $dbCon->prepare('SELECT idarticulo, Nombre, Descripcion, Precio, Imagen, idCat_Prod FROM Productos ORDER BY idarticulo DESC');
            
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

    public function RangoArtProd(){
        try{
            require("conexio.php");
            
                     
            // Preparem la consulta
            #echo '1';
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            #echo '2';
            // Preparem la consulta
            #$consulta = $dbCon->prepare('SELECT idarticulo, Nombre, Descripcion, Precio, Imagen, idCat_Prod FROM Productos ORDER BY idarticulo DESC LIMIT :offset, :limit');
            $consulta = $dbCon->prepare('SELECT idarticulo, Nombre, Descripcion, Precio, Imagen, idCat_Prod FROM Productos where idCat_Prod=1 ORDER BY idarticulo DESC LIMIT 3');
            // Executem la consulta
            #$consulta->bindValue(':offset', intval($ini),PDO::PARAM_INT);
            #$consulta->bindValue(':limit', intval($fin),PDO::PARAM_INT);
            #echo '3';
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
            #echo '4';
            // Tanquem la connexió
            $dbCon=null;
            // tornem els resultats
            return $articulos;
            
        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }
    }

    public function RangoArtDec(){
        try{
            require("conexio.php");
            
                     
            // Preparem la consulta
            #echo '1';
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            #echo '2';
            // Preparem la consulta
            #$consulta = $dbCon->prepare('SELECT idarticulo, Nombre, Descripcion, Precio, Imagen, idCat_Prod FROM Productos ORDER BY idarticulo DESC LIMIT :offset, :limit');
            $consulta = $dbCon->prepare('SELECT idarticulo, Nombre, Descripcion, Precio, Imagen, idCat_Prod FROM Productos where idCat_Prod=2 ORDER BY idarticulo DESC LIMIT 3');
            // Executem la consulta
            #$consulta->bindValue(':offset', intval($ini),PDO::PARAM_INT);
            #$consulta->bindValue(':limit', intval($fin),PDO::PARAM_INT);
            #echo '3';
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
            #echo '4';
            // Tanquem la connexió
            $dbCon=null;
            // tornem els resultats
            return $articulos;
            
        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }
    }


    public function aarticulo($nombre, $desc, $precio, $cat){
        try{
            require_once("conexio.php");
            
            $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
            $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
            #echo '555555555';
            #echo $cadenaConnexio;

            $consulta = $dbCon->prepare('INSERT INTO `Productos`
            (`Nombre`,
            `Descripcion`,
            `Precio`,
            `idCat_Prod`)
                VALUES (?, ?, ?, ?);');
            #mysql_query($consulta);
            #echo '5555555';

            echo("<br/>Nombre:".$nombre);
            echo("<br/>Descripcion:".$desc);
            echo("<br/>Precio".$precio);
            #echo("<br/>Imagen:".$imagen);
            echo("<br/>idCat_Prod".$cat);
            
            $consulta->execute(array($nombre, $desc, $precio, $cat));
            echo '6666666';
            #echo $consulta;
            print_r($dbCon->errorInfo());
            echo("Files afectades: ".$consulta->rowCount());
                        
            $dbCon=null;
            
        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }
    }
            
            
    

}



?>