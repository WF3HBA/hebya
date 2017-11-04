<?php

namespace Repository;

use Entity\Country;

class CountryRepository extends RepositoryAbstract {
    
    public function findAll(){
    
        $query = <<<SQL
            SELECT *
            FROM country
            ORDER BY name  
SQL;
       
            $dbCountries = $this->db->fetchAll($query);
            $countries = [];
            
            foreach ($dbCountries as $dbCountry){
                $countries[] = $this->buildEntity($dbCountry);
            }
            
            return $countries;
    }
    
    public function find($id){
         $dbCountry = $this->db->fetchAssoc(
            'SELECT * FROM country WHERE idcountry = :idcountry',
                [
                    ':idcountry' => $id
                ]
            );
        
            if(!empty($dbCountry)){
                return $this->buildEntity($dbCountry);
            }
    }

    public function findByStatus($status){
        $dbCountry = $this->db->fetchAll(
            'SELECT name FROM country WHERE status = :status',
                [
                    ':status' => $status
                ]
            );
        
            if(!empty($dbCountry)){
                return $dbCountry;
            }
    }
    
    public function findByName($name){
         $dbCountry = $this->db->fetchAssoc(
            'SELECT * FROM country WHERE name = :name',
                [
                    ':name' => $name
                ]
            );
        
            if(!empty($dbCountry)){
                return $this->buildEntity($dbCountry);
            }
    }
    
    public function save(Country $country){
        
        $data =
            [
                'name' => $country->getName(),
                'continent' => $country->getContinent(),
                'content' => $country->getContent(),
                'contact_name' => $country->getContact_name(),
                'contact_email' => $country->getContact_email(),
                'contact_phone' => $country->getContact_phone(),
                'contact_address' => $country->getContact_address(),
                'contact_city' => $country->getContact_city(),
                'status' => $country->getStatus()
            ];
        
        if ($country->getIdcountry()){
            $this->db->update('country', $data, 
                    [
                        'idcountry'=>$country->getIdcountry()
                    ] 
                );
        } else {
            $this->db->insert('country', $data);
            $country->setIdcountry($this->db->LastInsertId());
        }
    }
    
    public function delete(Country $country){
        $this->db->delete('country', ['idcountry' => $country->getIdcountry()]);
    }
    
    
    public function buildEntity(array $data){
       
        $country = new Country();
        
        $country
            ->setIdcountry($data['idcountry'])
            ->setContent($data['content'])
            ->setName($data['name'])
            ->setContinent($data['continent'])
            ->setContact_name($data['contact_name'])
            ->setContact_phone($data['contact_phone'])
            ->setContact_email($data['contact_email'])
            ->setContact_address($data['contact_address'])
            ->setContact_city($data['contact_city'])
            ->setStatus($data['status'])
        ;
        
        return $country;
    }
    
    public function findByCountry($countryName){
        
        $query = <<<SQL
    SELECT c.*
    FROM country c
    WHERE c.name = :name 
SQL;
        
        $dbCountry = $this->db->fetchAssoc(
                $query,
                [
                    ":name" => $countryName
                ]
            );
    
        if(!empty($dbCountry)){
                
            return $this->buildEntity($dbCountry);
                 
        }
    }
    
    public function countryHasProduct() {
      
      $query = <<<SQL
        SELECT DISTINCT c.*
        FROM country c
        JOIN country_has_product chp
        ON chp.idcountry = c.idcountry
SQL;
      
      $dbCountries = $this->db->fetchAll($query);
      
      $countries = [];
            
      foreach ($dbCountries as $dbCountry){
          $countries[] = $this->buildEntity($dbCountry);
      }

      return $countries;
      
    }
    
}
