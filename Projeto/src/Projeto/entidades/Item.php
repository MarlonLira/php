<?php

namespace Projeto\entidades;

/**
 * @Entity
 * @Table(name="item")
  */
class Item {
    
    /**
     * @var integer @id
     * @Column(name="id", type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**

     *
     * @ManyToOne(targetEntity="Pedido")
     * @JoinColumn(name="pedido_id", referencedColumnName="id")
     */
    
    private $pedido;
    
    /**
    * @var string @Column(type="string", length=255)
    */
    private $produto;
    
    /**
     * @var integer 
     * @Column(type="integer")
     */
    private $quantidade;
    
    function __construct($id, $pedido, $produto, $quantidade) {
        $this->id = $id;
        $this->pedido = $pedido;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }
       

    function getId() {
        return $this->id;
    }

    function getPedido() {
        return $this->pedido;
    }

    function getProduto() {
        return $this->produto;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPedido($pedido) {
        $this->pedido = $pedido;
    }

    function setProduto($produto) {
        $this->produto = $produto;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }



    
}
