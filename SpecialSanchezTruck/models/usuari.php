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
    }   
?>

 
