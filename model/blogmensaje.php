<?php 
class blogmensaje {
    private $idcomentario;
    private $nombre;
    private $mail;
    private $tema;
    private $mensaje;
   
    function __construct($nombre, $mail, $tema, $mensaje) {
        $this->nombre=$nombre;
        $this->email=$mail;
        $this->tema=$tema;
        $this->comentario=$mensaje;
        }
    

    /**
     * Get the value of idComentario
     */ 
    public function getIdcomentario()
    {
        return $this->idcomentario;
    }

    /**
     * Set the value of idComentario
     *
     * @return  self
     */ 
    public function setIdcomentario($idcomentario)
    {
        $this->idcomentario = $idcomentario;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    
    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->email;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->email = $mail;

        return $this;
    }

    /**
     * Get the value of Tema
     */ 
    public function getTema()
    {
        return $this->tema;
    }

    /**
     * Set the value of Tema
     *
     * @return  self
     */ 
    public function setTema($tema)
    {
        $this->tema = $tema;

        return $this;
    }


    /**
     * Get the value of idComentario
     */ 
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set the value of idPedido
     *
     * @return  self
     */ 
    public function setComentario($mensaje)
    {
        $this->comentario = $mensaje;

        return $this;
    }

}

?>