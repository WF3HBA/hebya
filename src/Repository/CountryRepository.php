<?php


namespace Repository;

use Entity\Country;

class CountryRepository extends RepositoryAbstract {
    
    public function findAll(){
    
        $query = <<<SQL
                
SELECT cl.*
FROM country_has_language cl
ORDER BY cl.country_name 

SQL;
       
            $dbCountries = $this->db->fetchAll($query);
            $Countries = [];
            
            foreach ($dbCountries as $dbCountry){
                $Countries[] = $this->buidtEntity($dbCountry);
            }
            
            return $Countries;
    }
    
    private function buildEntity(array $data){
       
        $country = new Country();
        
        $country
            ->setIdcountry($data['idcountry'])
            ->setContent($data['content'])
            ->setCountry_name($data['country_name'])
            ->setContinent($data['continent'])
        ;
        
        return $country;
    }
}
