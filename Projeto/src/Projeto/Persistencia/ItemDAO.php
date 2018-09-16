<?php

namespace Projeto\Persistencia;

use Projeto\Persistencia\AbstractDAO;
use Projeto\entidades\Item;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


class ItemDAO extends AbstractDAO {
    
    public function __construct() {
        parent::__construct('Projeto\entidades\Item');
                  
    }
}
