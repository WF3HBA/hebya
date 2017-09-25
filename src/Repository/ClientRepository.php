<?php

namespace Repository;

use Entity\Client;

class ClientRepository extends RepositoryAbstract{
    
       public function findAll(){
    
        $query = <<<SQL
                
        SELECT *    
        FROM client
        ORDER by idclient

SQL;
       
            $dbClients = $this->db->fetchAll($query);
            $clients = [];
            
            foreach ($dbClients as $dbClient){
                $clients[] = $this->buildEntity($dbClient);
            }
            
            return $clients;
    }
    
     public function find($id){
        $dbClient = $this->db->fetchAssoc(
                'SELECT * FROM client WHERE idclient = :idclient',
                [
                    ':idclient' => $id
                ]
            );
        
            if(!empty($dbClient)){
                return $this->buildEntity($dbClient);
            }
    }
    
    
    public function save(Client $client){
        $data = [
            'company' => $client->getCompany(),
            'description' => $client->getDescription(),
            'lastname' => $client->getLastname(),
            'firstname' => $client->getFirstname(),
            'phone' => $client->getPhone(),
            'email' => $client->getEmail(),
            'address' => $client->getAddress(),
            'city' => $client->getCity(),
            'country' => $client->getCountry(),
            'status' => $client->getStatus(),
            'picture' => $client->getPicture()
        ];
        
        if($client->getIdclient()){
            $this->db->update('client', $data,
                    [
                        'idclient'=>$client->getIdclient()
                    ]
                );
        } else {
            $this->db->insert('client', $data);
            $client->setIdclient($this->db->LastInsertId());
        }
    }
    
    
    
        private function buildEntity(array $data){
       
        $client = new Client();
        
        $client
            ->setIdclient($data['idclient'])
            ->setCompany($data['company'])
            ->setDescription($data['description'])
            ->setLastname($data['lastname'])
            ->setFirstname($data['firstname'])
            ->setPhone($data['phone'])
            ->setEmail($data['email'])
            ->setAddress($data['address'])
            ->setCity($data['city'])
            ->setCountry($data['country'])
            ->setStatus($data['status'])
            ->setPicture($data['picture'])
        ;
        
        return $client;
    }
}
