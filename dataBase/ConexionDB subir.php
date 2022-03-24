<?php

class ConexionDB
{
    private $host="localhost";
    private $user ="id18460223_latelier";
    private $password ="Ll12345_Ll1234";
    private $databaseName ="id18460223_tut";
    private $conn;
    
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
   
    public function conectar() {
        $this->conn = mysqli_connect ($this->host,$this->user,$this->password,$this->databaseName);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
    }

    public function cerrar() {
        $this->conn->close();
    }
    /**
     * Ejecuta la query recibida con el 
     * parámetro $sql.
     * Devuelve el resultado
     */
    public function ejecutar($sql) {
        return $this->conn->query($sql);
    }

    /**
     * Devuelve la cantidad de filas
     * que arrojó la última consulta a la 
     * conexión.
     */
    public function cantFilas() {
        return $this->conn->affected_rows;
    }

}

?>
