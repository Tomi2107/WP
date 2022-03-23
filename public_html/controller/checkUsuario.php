<?php 

    

    $usuario = $_POST["user"];

    $clave = $_POST["pass"];



    require_once("../model/Usuario.php");

    $usuario = new Usuario($usuario, $clave, "");



    require_once("../dao/UsuarioDAO.php");

    $usuarioDAO = new UsuarioDAO();

    $guardoOk = $usuarioDAO->guardarUsuario($usuario);



    if ($guardoOk) {

        echo "El usuario se agrego correctamente <br>" ;

    } else {

        echo "Error en agregar usuario <br>";

    }    

 

?>



<html>

    <br>

    <br>

    <br>

    <br>

    <br>

    <a href="https://elatelierdetuti.000webhostapp.com/">----------------  Inicio  ------</a>

</html>

