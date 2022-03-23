<?php 
    //obtiene los valores enviados desde login.html mediante POST
    $mail = $_POST['inputEmail'];
    $clave = $_POST['inputPassword'];

    //debug
/*  echo $mail;
    echo "<br>";
    echo $pass;
    echo "<br>";
*/
    require_once("../dao/UsuarioDAO.php");

    $usuarioDAO = new UsuarioDAO();
    $usuValido = $usuarioDAO->validarUsuarioYPass($mail, $clave);

    if($usuValido) {
        header("Location: ../view/webinterior.html");
        exit;
    } else {
        echo "Usuario o password incorrectos <br>";
        header("Location: ../view/loginError.html");
        exit;
        header("Location: ../view/errLogin.html");
    }


?>