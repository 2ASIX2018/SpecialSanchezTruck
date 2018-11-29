<?php
    class Usuari{
        public function validaUsuari($usuari, $pass){

            try{
                
                require_once("conexio.php");
                
                $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
                #$cadenaConnexio="mysql:host=127.0.0.1;dbname=sst";
                echo $cadenaConnexio;
                #$db = new PDO($cadenaConnexio, 'root', '');

                $db = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]);
                
                $consulta = $db->prepare("SELECT rol FROM Usuarios WHERE username = ? AND passwd = ?");
                $consulta->execute(array($usuari, $pass));
                                
                $role=false; 
                while($fila=$consulta->fetch()){ 
                $role=$fila[0];
                }
                $db=null; 
                return $role; 
                
                } catch (Exception $e){ 
                echo("Error:".$e->getMessage());
                $db=null;
                }
        }

        public function altaUsuari($unam, $nom, $apll, $email, $passw, $direc, $dni, $tlf, $cit, $cod, $pais, $prov, $rol){

            try{
                
                require_once("conexio.php");
                
                $cadenaConnexio="mysql:host=".$connexio["servidor"].";dbname=".$connexio['bd'];
                $dbCon = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]); 
                $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
                #echo '555555555';
                echo $cadenaConnexio;

                $consulta = $dbCon->prepare('INSERT INTO `Usuarios`
                (`username`,
                `nombre`,
                `apellidos`,
                `email`,
                `passwd`,
                `direccion`,
                `dni`,
                `telefono`,
                `poblacion`,
                `cod_postal`,
                `pais`,
                `provincia`,
                `rol`)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');
                #mysql_query($consulta);
                #echo '5555555';

                echo("<br/>Unombre:".$unam);
                echo("<br/>Nombre:".$nom);
                echo("<br/>Apellido".$apll);
                echo("<br/>nimagen".$email);
                echo("<br/>Contraseña".$passw);
                echo("<br/>Direccio:".$direc);
                echo("<br/>DNI:".$dni);
                echo("<br/>Telefono:".$tlf);
                echo("<br/>Ciudad:".$cit);
                echo("<br/>Pais:".$pais);
                echo("<br/>CP:".$cod);
                echo("<br/>Prov:".$prov);
                echo("<br/>Rol:".$rol);
                

                
                $consulta->execute(array($unam, $nom, $apll, $email, $passw, $direc, $dni, $tlf, $cit, $cod, $pais, $prov, $rol));
                #echo '6666666';
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

 
