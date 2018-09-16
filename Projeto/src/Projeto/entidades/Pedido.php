<?php

namespace Projeto\entidades;

/**
 * @Entity
 * @Table(name="pedido")
  */
class Pedido {
    
    /**
     * @var integer @id
     * @Column(name="id", type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @Column(type="datetime")
     * @var DateTime 
    */
    private $hora;
    
   /**
    * @ManyToOne(targetEntity="Usuario")
    * @JoinColumn(name="usuario_id", referencedColumnName="id")   
    */
    private $usuario;
    
    /**
    * @OneToMany(targetEntity="Item", mappedBy="pedido", cascade={"persist" , "remove"})
    *    
    */
    private $itens;
    
    function __construct($hora, $usuario, $itens) {
       
        $this->hora = $hora;
        $this->usuario = $usuario;
        $this->itens = $itens;
    }

    function getId() {
        return $this->id;
    }

    function getHora() {
        return $this->hora;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getItens() {
        return $this->itens;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setItens($itens) {
        $this->itens = $itens;
    }

    public function __toString() {
        
        return "<br>" ."Id: " . $this->getId() . "<br>"  . "Usuario: " . $this->getUsuario() . "<br>";
       
    }

    
}
