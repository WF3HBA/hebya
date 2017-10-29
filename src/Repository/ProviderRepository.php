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
                'description' => $provider->getDescription(),
                'email' => $provider->getEmail(),
                'phone' => $provider->getPhone(),
                'address' => $provider->getAddress(),
                'city' => $provider->getCity(),
                'country' => $provider->getCountry(),
                'picture' => $provider->getPicture(),
                'status' => $provider->getStatus()
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
                ->setDescription($data['description'])
                ->setEmail($data['email'])
                ->setPhone($data['phone'])
                ->setAddress($data['address'])
                ->setCity($data['city'])
                ->setCountry($data['country'])
                ->setPicture($data['picture'])
                ->setStatus($data['status'])
        ;
        
        return $provider;
    }
    
    public function findByCountryAndField($idCountry){
        
        $query = <<<SQL
    SELECT pr.*

    FROM provider pr
    WHERE true 
SQL;
        
        $parameters = [];
        
        if (!empty($idCountry)) {
            $query .= ' AND pr.country = :country';
            $parameters[':country'] = $idCountry;
        }
        
//        if (!empty($field)) {
//            $query .= ' AND pr.field = :field';
//            $parameters[':field'] = $field;
//        }
        
        $dbProviders = $this->db->fetchAll(
                $query,
                $parameters
            );
    
            $providers = [];    
        
            foreach($dbProviders as $dbProvider){
                $providers[] = $this->buildEntity($dbProvider);
            }
            
            return $providers;
    }
}
