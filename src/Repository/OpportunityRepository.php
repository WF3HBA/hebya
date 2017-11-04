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
            ->setPosition($data['position'])
            ->setReference($data['reference'])
            ->setCity($data['city'])
            ->setField($data['field'])
            ->setContract_type($data['contract_type'])
            ->setPublication_date($data['publication_date'])
            ->setHiring_date($data['hiring_date'])
            ->setRequired_skills($data['required_skills'])
            ->setDescription($data['description'])
            ->setSalary($data['salary'])
            ->setStatus($data['status'])
            ->setCountry($country)
        ;
        
        return $opportunity;
    }
    
    public function findBySelector($field, $idcountry, $contrat_type ){
        
        $query = <<<SQL
    SELECT op.*,
           c.idcountry,
           c.name
    FROM opportunity op
    JOIN country c ON c.idcountry = op.idcountry            
    WHERE true 
SQL;
        
        $parameters = [];
        
        if (!empty($field)) {
            $query .= ' AND op.field = :field';
            $parameters[':field'] = $field;
        }
        
        if (!empty($idcountry)) {
            $query .= ' AND c.idcountry = :idcountry';
            $parameters[':idcountry'] = $idcountry;
        }
        
        
        if (!empty($contrat_type)) {
            $query .= ' AND op.contract_type = :contract_type';
            $parameters[':contract_type'] = $contrat_type;
        }
//        echo $query;
        $dbopportunities = $this->db->fetchAll(
                $query, 
                $parameters
            );
    
            $opportunities = [];    
        
            foreach($dbopportunities as $dbopportunity){
                $opportunities[] = $this->buildEntity($dbopportunity);
            }
            
            return $opportunities;
    }
    
    public function delete($opportunity){
        
        $this->db->delete('opportunity', ['idopportunity' => $opportunity->getIdopportunity()]);
    }

    public function save(opportunity $opportunity){
        
                $data =
                    [
                        'idopportunity' => $opportunity->getidopportunity(),
                        'position' => $opportunity->getPosition(),
                        'city' => $opportunity->getCity(),
                        'contract_type'=> $opportunity->getContract_type(),
                        'hiring_date'=>$opportunity->getHiring_date(),
                        'publication_date'=> $opportunity->getPublication_date(),
                        'required_skills'=>$opportunity->getRequired_skills(),
                        'description' => $opportunity->getDescription(),
                        'reference' => $opportunity->getReference(),
                        'field' => $opportunity->getField(),
                        'salary'=>$opportunity->getSalary(),
                        'idcountry'=>$opportunity->getIdcountry(),
                        'status' => $opportunity->getStatus()
                    ];
        
                if ($opportunity->getidopportunity()){
                    $this->db->update('opportunity', $data, 
                            [
                                'idopportunity'=>$opportunity->getidopportunity()
                            ] 
                        );
                } else {
                    $this->db->insert('opportunity', $data);
                    $opportunity->setidopportunity($this->db->LastInsertId());
                }
            }
   
    
}
