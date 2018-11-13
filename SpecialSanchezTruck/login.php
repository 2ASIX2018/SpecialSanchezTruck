<html>

<body>

<h1>Datos del Formulario de Registro.</h1>

<?php

$usuaris=["admin","user"];

$user=$_REQUEST["inputUser"];
$passw=$_REQUEST["inputPassword"];
$recordar=$_REQUEST["recuerdame"];

if ($passw=="1234" && in_array($user, $usuaris)) {

    $_SESSION['username']=$user;
    
    if ($user=="admin") {
        $_SESSION['role']="admin";
    } else if ($user=="user") {
        $_SESSION["role"]="user";
    }

    if ($recordar=="recuerdame") {

        setcookie('SstUser', $_SESSION['username'], time() + 365 * 24 * 60 * 60);
        setcookie('SstUser', $_SESSION['role'], time() + 365 * 24 * 60 * 60);
    
    }

    header("Location: index.php");

} else {

    header("Location: registro.php");

}





?>


</body>
</html>