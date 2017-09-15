<?php


namespace Repository;

use Entity\Provider;
use Repository\RepositoryAbstract;




class ProviderRepository extends RepositoryAbstract{
    
    public function findAll(){
    
        $query = <<<SQL
                
SELECT pr.*         
FROM provider pr     
ORDER BY pr.idprovider

SQL;
       
            $dbProviders = $this->db->fetchAll($query);
            $Providers = [];
            
            foreach ($dbProviders as $dbProvider){
                $Providers[] = $this->buildEntity($dbProvider);
            }
            
            return $Providers;
    }
    
    private function buildEntity(array $data){
       
        $provider = new Provider();
            
        $provider
                ->setIdprovider($data['idprovider'])
                ->setLastname($data['lastname'])
                ->setFirstname($data['firstname'])
                ->setCompany($data['company'])
                ->setEmail($data['email'])
                ->setPhone($data['phone'])
                ->setAddress($data['address'])
                ->setCountry($data['country'])
        ;
        
        
        return $provider;
    }
}
