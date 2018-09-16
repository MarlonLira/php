<?php

namespace Projeto\Persistencia;

use Projeto\Persistencia\AbstractDAO;
use Projeto\entidades\Pedido;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;



class PedidoDAO extends AbstractDAO{
    
    public function __construct() {
        parent::__construct('Projeto\entidades\Pedido');
        
    }
    
    public function insert($obj){
                 
        $usuarioPersistido = $this->entityManager->find('Projeto\entidades\Usuario', $obj->getUsuario()->getId());
        $obj->setUsuario($usuarioPersistido);
        parent::insert($obj); 
           
    
    }
}
