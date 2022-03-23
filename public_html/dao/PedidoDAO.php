<?php 
class PedidoDAO {

    public function guardarPedido($pedido) {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost", "id18460223_tut", "Ll12345_Ll1234", "id18460223_latelier");
        $conexionDB->conectar();
    
        $sql = "INSERT INTO pedidos 
        (`nombre`, `apellido`, `usuario`, `mail`, `lugarentrega`, `localidad`, `provincia`, `codpostal`, `formadepago`, `tarjtitular`, `tarjnumero`, `tarjvto`, `tarjclave`) 
        VALUES (
        '{$pedido->getnombre()}', 
        '{$pedido->getapellido()}', 
        '{$pedido->getusuario()}', 
        '{$pedido->getmail()}', 
        '{$pedido->getlugarentrega()}', 
         '{$pedido->getlocalidad()}',
         '{$pedido->getprovincia()}', 
         '{$pedido->getcodpostal()}', 
         '{$pedido->getformadepago()}', 
         '{$pedido->gettarjtitular()}', 
         '{$pedido->gettarjnumero()}', 
         '{$pedido->gettarjvto()}', 
         '{$pedido->gettarjclave()}')";
        
        
        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;
    }

    public function listarPedidos() {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost", "id18460223_tut", "Ll12345_Ll1234", "id18460223_latelier");
        $conexionDB->conectar();

        $sql = "SELECT * FROM pedidos";
        $result = $conexionDB->ejecutar($sql);

        while($pedido = $result->fetch_assoc()) {
            $listaPedidos[] = $pedido;
        }
            
        return $listaPedidos;
    }

    /** Método o Función que devuelve todos los pedidos de 
     * la tabla Pedidos de la Base de Datos.
     * El método se conecta a la BD, obtiene todos los pedidos
     * y devuelve un array asociativo.
     */
    public function listarPedidosEC() {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost", "id18460223_tut", "Ll12345_Ll1234", "id18460223_latelier");
        $conexionDB->conectar();

        $sql = "SELECT * FROM pedidos ORDER BY apellido";
        $result = $conexionDB->ejecutar($sql);

        while ($pedido = $result->fetch_assoc()) {
            $listaPedidos[] = $pedido;
        }

        return $listaPedidos;
    }
}

?>