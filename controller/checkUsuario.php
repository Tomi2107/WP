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



<html>

    <br>

    <br>

    <br>

    <br>

    <br>

    <a href="https://elatelierdetuti.000webhostapp.com/">----------------  Inicio  ------</a>

</html>

