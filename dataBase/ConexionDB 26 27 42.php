<?php

class ConexionDB
{
    private $host ="localhost";
    private $user ="id18460223_latelier";
    private $password ="Ll12345_Ll1234";
    private $databaseName ="id18460223_tut";
    private $conexion;
    
    public function __construct($host, $user, $password, $databaseName)
    {
        $this->host=$host;
        $this->user=$user;
        $this->password=$password;
        $this->databaseName=$databaseName;
    }

    /**
     * Conecta con la base de datos,
     * matienen la conexión en el atributo $conexion
     */
    
    public function conectar()
    {
        $this->conexion = mysqli_connect($this->host, $this->user, $this->password, $this->databaseName);
        if ($this->conexion->connect_errno) {
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
