<?php 
class Pedido {
    private $idpedido;
    private $nombre;
    private $apellido;
    private $usuario;
    private $mail;
    private $lugarentrega;
    private $localidad;
    private $provincia;
    private $codpostal;
    private $formadepago;
    private $tarjtitular;
    private $tarjnumero;
    private $tarjvto;
    private $tarjclave;

    function __construct($nombre, $apellido, $usuario, $mail, $lugarentrega, $localidad, $provincia, $codpostal, $formadepago, $tarjtitular, $tarjnumero, $tarjvto, $tarjclave) {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->usuario=$usuario;
        $this->email=$mail;
        $this->lugarEntrega=$lugarentrega;
        $this->localidad=$localidad;
        $this->provincia=$provincia;
        $this->codPostal=$codpostal;
        $this->formaDePago=$formadepago;
        $this->tarjTitular=$tarjtitular;
        $this->tarjNumero=$tarjnumero;
        $this->tarjVto=$tarjvto;
        $this->tarjClave=$tarjclave;        
    }
    

    /**
     * Get the value of idPedido
     */ 
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set the value of idPedido
     *
     * @return  self
     */ 
    public function setIdPedido($idpedido)
    {
        $this->idPedido = $idpedido;

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
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

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
     * Get the value of lugarEntrega
     */ 
    public function getLugarEntrega()
    {
        return $this->lugarEntrega;
    }

    /**
     * Set the value of lugarEntrega
     *
     * @return  self
     */ 
    public function setLugarEntrega($lugarentrega)
    {
        $this->lugarEntrega = $lugarentrega;

        return $this;
    }

    /**
     * Get the value of localidad
     */ 
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set the value of localidad
     *
     * @return  self
     */ 
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get the value of provincia
     */ 
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set the value of provincia
     *
     * @return  self
     */ 
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get the value of codPostal
     */ 
    public function getCodPostal()
    {
        return $this->codPostal;
    }

    /**
     * Set the value of codPostal
     *
     * @return  self
     */ 
    public function setCodPostal($codpostal)
    {
        $this->codPostal = $codpostal;

        return $this;
    }

    /**
     * Get the value of formaDePago
     */ 
    public function getFormaDePago()
    {
        return $this->formaDePago;
    }

    /**
     * Set the value of formaDePago
     *
     * @return  self
     */ 
    public function setFormaDePago($formadepago)
    {
        $this->formaDePago = $formadepago;

        return $this;
    }

    /**
     * Get the value of tarjTitular
     */ 
    public function getTarjTitular()
    {
        return $this->tarjTitular;
    }

    /**
     * Set the value of tarjTitular
     *
     * @return  self
     */ 
    public function setTarjTitular($tarjtitular)
    {
        $this->tarjTitular = $tarjtitular;

        return $this;
    }

    /**
     * Get the value of tarjNumero
     */ 
    public function getTarjNumero()
    {
        return $this->tarjNumero;
    }

    /**
     * Set the value of tarjNumero
     *
     * @return  self
     */ 
    public function setTarjNumero($tarjnumero)
    {
        $this->tarjNumero = $tarjnumero;

        return $this;
    }

    /**
     * Get the value of tarjVto
     */ 
    public function getTarjVto()
    {
        return $this->tarjVto;
    }

    /**
     * Set the value of tarjVto
     *
     * @return  self
     */ 
    public function setTarjVto($tarjvto)
    {
        $this->tarjVto = $tarjvto;

        return $this;
    }

    /**
     * Get the value of tarjClave
     */ 
    public function getTarjClave()
    {
        return $this->tarjClave;
    }

    /**
     * Set the value of tarjClave
     *
     * @return  self
     */ 
    public function setTarjClave($tarjclave)
    {
        $this->tarjClave = $tarjclave;

        return $this;
    }
}

?>