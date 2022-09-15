<?php

if($_POST){ 
    $nombre= $_POST["txtNombre"];
    $contra= $_POST["contrase"];
    if($nombre == "administrador" and $contra == "asd"){
        header('location: grafica.php');
    }
    else {if($nombre == "cliente" and $contra == 123){
        header('location: tienda.php');
    }

    else{
        header('location: error.php');
    }
     }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body BGCOLOR=" #A3FA72 ">
    <H1 align="center">Bienvenido</H1>
<br/><br/><br/><br/><br/><br/>
    <form action="inicio.php" method="post" align="center">
        usuario:
        <input type="text" name="txtNombre" id="">
        <br/>
        <br/>
        contraseña:
        <input type="text" name="contrase" id="">
        <br/>
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>