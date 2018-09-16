<?php 
namespace Projeto\Persistencia;

use Projeto\entidades\Usuario;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Projeto\Persistencia\AbstractDAO;

class UsuarioDAO extends AbstractDAO{
    
    public function __construct() {
        parent::__construct('Projeto\entidades\Usuario');
        
        
        
    }

    
}
