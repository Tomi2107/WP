<?php 
class blogmensajeDAO
{
    public function guardarMensaje($mensajes)
    {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost", "id18460223_latelier", "Ll12345_Ll1234", "id18460223_tut");
        $conexionDB->conectar();
    
        $sql = "INSERT INTO blogmensajes
        (`idcomentario`, `nombre`, `email`, `comentario`, `tema`) 
        VALUES (
        '{$mensajes->getIdcomentario()}',
        '{$mensajes->getNombre()}',
        '{$mensajes->getMail()}',
        '{$mensajes->getComentario()}',
        '{$mensajes->getTema()}')";
        
        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;
    }

    public function listarMensajes()
    {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost", "id18460223_latelier", "Ll12345_Ll1234", "id18460223_tut");
        $conexionDB->conectar();

        $sql = "SELECT * FROM blogmensajes";
        $result = $conexionDB->ejecutar($sql);

        while ($mensajes = $result->fetch_assoc()) {
            $listaMensaje[] = $mensajes;
        }
            
        return $listaMensaje;
    }


    


    /** Método o Función que devuelve todos los pedidos de
     * la tabla Pedidos de la Base de Datos.
     * El método se conecta a la BD, obtiene todos los pedidos
     * y devuelve un array asociativo.
     */

        public function Comentario()
    {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost", "id18460223_latelier", "Ll12345_Ll1234", "id18460223_tut");
        $conexionDB->conectar();

        $sql = "SELECT * FROM `blogmensaje` * ORDER BY nombre";
        $result = $conexionDB->ejecutar($sql);

        while ($mensajes = $result->fetch_assoc()) {
            $listamensajes[] = $mensajes;
        }

        return $listamensaje;
    }
}
?> 