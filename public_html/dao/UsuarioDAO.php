<?php 



/**

 * Clase donde se realizan todas las consultas, altas y

 * modificaciones en la tabla Usuario

 */

class UsuarioDAO {



    public function validarUsuarioYPass($usuario, $clave) {

        require_once("../dataBase/ConexionDB.php");



        $conexionDB = new ConexionDB("localhost", "id18460223_tut", "Ll12345_Ll1234", "id18460223_latelier");

        $conexionDB->conectar(); //conecta php con la base de datos MySql

    

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'";

        $conexionDB->ejecutar($sql);

    

        return $conexionDB->cantFilas() > 0;

    }



    public function validarUsuario($usuario) {

        require_once("../dataBase/ConexionDB.php");



        $conexionDB = new ConexionDB("localhost", "id18460223_tut", "Ll12345_Ll1234", "id18460223_latelier");

        $conexionDB->conectar();

    

        $sql = "SELECT * FROM usuarios WHERE usuario = $usuario";

        $conexionDB->ejecutar($sql);

    

        return $conexionDB->cantFilas() > 0;        

    }



    public function guardarUsuario($usuario) {

        require_once("../dataBase/ConexionDB.php");

        $conexionDB = new ConexionDB("localhost", "id18460223_tut", "Ll12345_Ll1234", "id18460223_latelier");

        $conexionDB->conectar();



        $sql = "INSERT INTO `usuarios`(`usuario`, `clave`, `nombreyapellido`) 

        VALUES (

            '{$usuario->getUsuario()}', 

            '{$usuario->getClave()}', 

            '')";



        $conexionDB->ejecutar($sql);    



        return $conexionDB->cantFilas() > 0;

    }

}



?>