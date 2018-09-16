<?php
namespace Projeto\entidades;

/**
 * @Entity
 * @Table(name="usuario")
  */
class Usuario {
    /**
     * @var integer @id
     * @Column(name="id", type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
   private $id;
   
  /**
   * @var string @Column(type="string", length=255)
   */
   private $email;
   /**
   * @var string @Column(type="string", length=255)
   */
   private $senha;
   /**
   * @var string @Column(type="string", length=255)
   */
   private $endereco;
   
   function __construct($email, $senha, $endereco) {
       $this->email = $email;
       $this->senha = $senha;
       $this->endereco = $endereco;
   }


   function getId() {
       return $this->id;
   }

   function getEmail() {
       return $this->email;
   }

   function getSenha() {
       return $this->senha;
   }

   function getEndereco() {
       return $this->endereco;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setSenha($senha) {
       $this->senha = $senha;
   }

   function setEndereco($endereco) {
       $this->endereco = $endereco;
   }


   public function __toString() {
       
       return "<br>" ."Id: " . $this->getId() . "<br>" . "Email: " . $this->getEmail(). "<br>" . "Endereço: " . $this->getEndereco();
       
   }

}
