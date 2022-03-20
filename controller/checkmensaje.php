<?php 

    $nombre = $_POST['firstName'];
    $mail = $_POST['email'];
    $tema = $_POST['tema'];
    $mensaje = $_POST['comentario'];
    
    //Este paso es necesario porque trabajamos con POO
    //Creamos un objeto Pedido para luego guardarlo en la DB
    require_once("../model/blogmensaje.php");

    $mensajes = new blogmensaje($nombre, $mail, $tema, $mensaje);
    
    require_once("../dao/blogmensajeDAO.php");

    $blogmensajeDAO = new blogmensajeDAO();
    $guardoOk = $blogmensajeDAO->guardarMensaje($mensajes);

    if ($guardoOk) {
        echo "El mensaje se agrego correctamente <br>";
    } else {
        echo "Error en agregar mensaje <br>";
    }

  
?>

<html>
  <a href="../view/listaMensaje.php">Lista de mensajes</a>
  <br>
  <p><a href="../view/webinterior.html">Inicio</a></p> 
  <br>
</html>