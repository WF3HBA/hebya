<?php

namespace Repository;

use Entity\Service;

class ServiceRepository extends RepositoryAbstract {
    
    public function findAll(){
    
        $query = <<<SQL
                
        SELECT *         
        FROM service  
        ORDER BY idservice

SQL;
       
            $dbServices = $this->db->fetchAll($query);
            $services = [];
            
            foreach ($dbServices as $dbService){
                $services[] = $this->buildEntity($dbService);
            }
            
            return $services;
    }
    
    public function find($target) {
       
        $query = <<<SQL
            SELECT *
            FROM service
            WHERE target = :target;
SQL;
       
       $dbService = $this->db->fetchAssoc(
              $query,
               [
                   ':target' => $target
               ]
       );
       
       if (!empty($dbService)) {
           return $this->buildEntity($dbService);
       }
               
   }
   
   private function buildEntity(array $data){
       
        $service = new Service();
        
        $service
            ->setIdService($data['idservice'])
            ->setTarget($data['target'])
            ->setContent($data['content'])
        ;
        
        return $service;
    }
    
}
