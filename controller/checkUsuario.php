<?php 

    

    $mail = $_POST["user"];

    $clave = $_POST["pass"];



    require_once("../model/Usuario.php");

    $mail = new Usuario($mail, $clave, "");



    require_once("../dao/UsuarioDAO.php");

    $usuarioDAO = new UsuarioDAO();

    $guardoOk = $usuarioDAO->guardarUsuario($mail);



    if ($guardoOk) {

        echo "El usuario se agrego correctamente <br>" ;

    } else {

        echo "Error en agregar usuario <br>";

    }    

 

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

    <br>

    <br>

    <br>

    <br>

    <br>

    <a href="https://elatelierdetuti.000webhostapp.com/">----------------  Inicio  ------</a>
    </body>
</html>

