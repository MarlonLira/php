<?php
namespace Projeto\Persistencia;

use Projeto\entidades\Pedido;
use Projeto\entidades\Usuario;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class AbstractDAO {
    
    
    public $entityManager;
    public $entityPath;
    
   public function createEntityManager(){
        
        $isDevMode = true;
        $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/Projeto/entidades"), $isDevMode);


        $conn = array(
            'driver'   => 'pdo_mysql',
            'user'     => 'root',
            'password' => '',
            'dbname'   => 'projeto',
        );


        return EntityManager::create($conn, $config);
        
    }
    
   public function __construct($entityPath) {        
        
        $this->entityManager = $this->createEntityManager();
        $this->entityPath = $entityPath;
    }
    
    public function insert($user){
        
        $this->entityManager->persist($user);
        $this->entityManager->flush();      
    
    }
    
    public function update($user){
        
        $this->entityManager->merge($user);
        $this->entityManager->flush();
        
        
    }
    
    public function delete($id){
        
        $this->entityManager->remove($user);
                
    }
    
    public function findById($id){
        
        return $entityManager->find($entityPath, $id);
                
    }
    
    public function findAll(){
        
        $collection = $this->entityManager->getRepository($this->entityPath)->findAll();
        
        $data = array();
        foreach ($collection as $obj){
            $data [] = $obj;
            
            return $data;
        }
        
    }
    
}
