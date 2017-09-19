<?php

namespace Repository;

use Entity\Country;
use Entity\Opportunity;

class OpportunityRepository extends RepositoryAbstract {
   
    public function findAll(){
    
        $query = <<<SQL
                
        SELECT
            o.*,
            c.name
        FROM opportunity o
        JOIN country c ON o.idcountry = c.idcountry
        ORDER BY publication_date

SQL;
       
            $dbOpportunities = $this->db->fetchAll($query);
            $opportunities = [];
            
            foreach ($dbOpportunities as $dbOpportunity){
                $opportunities[] = $this->buildEntity($dbOpportunity);
            }
            
            return $opportunities;
    }
    
    
    
    public function find($id){
         $dbOpportunity = $this->db->fetchAssoc(
                'SELECT o.*, c.name FROM opportunity o JOIN country c ON o.idcountry = c.idcountry WHERE idopportunity = :idopportunity',
                [
                    ':idopportunity' => $id
                ]
            );
        
            if(!empty($dbOpportunity)){
                return $this->buildEntity($dbOpportunity);
            }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    private function buildEntity(array $data){
       
        $country = new Country; 
        
        $country
                ->setIdCountry($data['idcountry'])
                ->setName($data['name'])
        ;
        
        $opportunity = new Opportunity();
        
        $opportunity
            ->setIdopportunity($data['idopportunity'])
            ->setTitle($data['title'])
            ->setReference($data['reference'])
            ->setCity($data['city'])
            ->setField($data['field'])
            ->setContract_type($data['contract_type'])
            ->setPublication_date($data['publication_date'])
            ->setHiring_date($data['hiring_date'])
            ->setRequired_skills($data['required_skills'])
            ->setDescription($data['description'])
            ->setSalary($data['salary'])
            ->setCountry($country)
        ;
        
        return $opportunity;
    }
    
    
    
}
