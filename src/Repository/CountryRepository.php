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
        ;
        
        return $country;
    }
}
