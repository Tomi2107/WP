<?php 

class ConexionDB {
    private $localhost;
    private $id18460223_latelier;
    private $Ll12345_Ll1234;
    private $id18460223_tut;
    private $conexion;

    function __construct($localhost,$id18460223_latelier,$Ll12345_Ll1234,$id18460223_tut) {
        $this->host=$localhost;
        $this->user=$id18460223_latelier;
        $this->password=$Ll12345_Ll1234;
        $this->databaseName=$id18460223_tut;
    }

    /**
     * Conecta con la base de datos,
     * matienen la conexión en el atributo $conexion
     */
    
     public function conectar() {
        $this->conexion = new mysqli($this->host,$this->user,$this->password,$this->databaseName);
        if($this->conexion->connect_errno) {
            die("Error de conexión: (" . $this->conn->connect_error . ")" . $this->conn->connect_errno);
        }
    }


    public function cerrar() {
        $this->conexion->close();
    }

    /**
     * Ejecuta la query recibida con el 
     * parámetro $sql.
     * Devuelve el resultado
     */
    public function ejecutar($sql) {
        return $this->conexion->query($sql);
    }

    /**
     * Devuelve la cantidad de filas
     * que arrojó la última consulta a la 
     * conexión.
     */
    public function cantFilas() {
        return $this->conexion->affected_rows;
    }

}

?>