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
            'company_type' => $client->getCompany_type(),
            'lastname' => $client->getLastname(),
            'firstname' => $client->getFirstname(),
            'phone' => $client->getPhone(),
            'email' => $client->getEmail(),
            'password' => $client->getPassword(),
            'address' => $client->getAddress(),
            'country' => $client->getCountry(),
            'status' => $client->getStatus(),
            'picture' => $client->getPicture(),
            'logo' => $client->getLogo(),
            
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
            ->setCompany_type($data['company_type'])
            ->setLastname($data['lastname'])
            ->setFirstname($data['firstname'])
            ->setPhone($data['phone'])
            ->setEmail($data['email'])
            ->setAddress($data['address'])
            ->setCountry($data['country'])
            ->setStatus($data['status'])
            ->setPicture($data['picture'])
        ;
        
        return $client;
    }
}
