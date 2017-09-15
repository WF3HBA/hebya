<?php

namespace Repository;

use Entity\Service;

class ServiceRepository extends RepositoryAbstract {
    
        public function find($target) {
       
        $query = <<<SQL
            SELECT
                sl.*,
                s.target
            FROM
                service_has_language sl
            JOIN
                service s
            ON
                s.idservice = sl.idservice
            WHERE s.target = :target;
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
            ->setIdLanguage($data['idlanguage'])
            ->setTarget($data['target'])
            ->setHeader($data['header'])
            ->setContent($data['content'])
        ;
        
        return $service;
    }
    
}
