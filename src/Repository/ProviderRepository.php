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
    
    
    
    public function find($id){
        $dbProvider = $this->db->fetchAssoc(
                'SELECT * FROM provider WHERE idprovider = :idprovider',
                [
                    ':idprovider' => $id
                ]
            );
        
            if(!empty($dbProvider)){
                return $this->buildEntity($dbProvider);
            }
    }
    
    
    
    public function save(Provider $provider){
        
        $data =
            [
                'lastname' => $provider->getLastname(),
                'firstname' => $provider->getFirstname(),
                'company' => $provider->getCompany(),
                'summary' => $provider->getSummary(),
                'description' => $provider->getDescription(),
                'email' => $provider->getEmail(),
                'phone' => $provider->getPhone(),
                'address' => $provider->getAddress(),
                'country' => $provider->getCountry()
            ];
        
        if ($provider->getIdprovider()){
            $this->db->update('provider', $data, 
                    [
                        'idprovider'=>$provider->getIdprovider()
                    ] 
                );
        } else {
            $this->db->insert('provider', $data);
            $provider->setIdprovider($this->db->LastInsertId());
        }
    }
    
    
    
    public function delete(Provider $provider){
        
        $this->db->delete('provider', ['idprovider' => $provider->getIdprovider()]);
    }
    
    
    private function buildEntity(array $data){
       
        $provider = new Provider();
            
        $provider
                ->setIdprovider($data['idprovider'])
                ->setLastname($data['lastname'])
                ->setFirstname($data['firstname'])
                ->setCompany($data['company'])
                ->setSummary($data['summary'])
                ->setDescription($data['description'])
                ->setEmail($data['email'])
                ->setPhone($data['phone'])
                ->setAddress($data['address'])
                ->setCountry($data['country'])
        ;
        
        
        return $provider;
    }
}
