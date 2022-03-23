<?php 
class Usuario {
    private $idUsuario;
    private $usuario;
    private $clave;
    private $nombreYApellido;
    
    function __construct($usuario, $clave, $nombreYApellido) {
        $this->usuario=$usuario;    
        $this->clave=$clave;    
        $this->nombreYApellido=$nombreYApellido;    
    }

    /**
     * Get the value of idUsuario
     */ 
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */ 
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of clave
     */ 
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set the value of clave
     *
     * @return  self
     */ 
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get the value of nombreYApellido
     */ 
    public function getNombreYApellido()
    {
        return $this->nombreYApellido;
    }

    /**
     * Set the value of nombreYApellido
     *
     * @return  self
     */ 
    public function setNombreYApellido($nombreYApellido)
    {
        $this->nombreYApellido = $nombreYApellido;

        return $this;
    }
}
?>