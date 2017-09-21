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
    
    public function find($id) {
       
        $query = <<<SQL
            SELECT *
            FROM service
            WHERE idservice = :id;
SQL;
       
       $dbService = $this->db->fetchAssoc(
              $query,
               [
                   ':id' => $id
               ]
       );
       
       if (!empty($dbService)) {
           return $this->buildEntity($dbService);
       }
               
   }
   
    public function save(Service $service){

           $data =
               [
                   'idService' => $service->getIdService(),
                   'target' => $service->getTarget(),
                   'content' => $service->getContent()
               ];

           if ($service->getIdService()) {
               $this->db->update('service', $data, 
                       [
                           'idService'=>$service->getIdService()
                       ] 
                   );
           } else {
               $this->db->insert('service', $data);
               $service->setIdService($this->db->LastInsertId());
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
