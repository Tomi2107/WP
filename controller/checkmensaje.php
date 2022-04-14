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
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <a href="../view/listaMensaje.php">Lista de mensajes</a>
  <br>
  <p><a href="../view/webinterior.html">Inicio</a></p> 
  <br>
    </body>
</html>