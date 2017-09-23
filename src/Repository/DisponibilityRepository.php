<?php

namespace Repository;

use Entity\Disponibility;

class DisponibilityRepository extends RepositoryAbstract {
    
    public function findProductsByCountry($id){
         $dbProducts = $this->db->fetchAll(
                'SELECT * FROM country_has_product WHERE idcountry = :idcountry',
                [
                    ':idcountry' => $id
                ]
            );

            $disponibilities = [];
            
            foreach ($dbProducts as $dbProduct){

                $disponibilities[] = $this->buildEntity($dbProduct);

            }
            
            return $disponibilities;
    }
    
    public function findCountriesByProduct($id){
         $dbCountries = $this->db->fetchAll(
                'SELECT * FROM country_has_product WHERE idproduct = :idproduct',
                [
                    ':idproduct' => $id
                ]
            );
        
            $disponibilities = [];
            
            foreach ($dbCountries as $dbCountry){

                $disponibilities[] = $this->buildEntity($dbCountry);

            }
            
            return $disponibilities;
    }
    
    
    private function buildEntity(array $data){
       
        $disponibility = new Disponibility();
        
        $disponibility
            ->setIdcountry($data['idcountry'])
            ->setIdproduct($data['idproduct'])
        ;
        
        return $disponibility;
    }
    
    public function save(Disponibility $disponibility) {
        
        $data =
            [
                'idcountry' => $disponibility->getIdcountry()
            ];

        if ($disponibility->getIdproduct()) {
            $this->db->update('country_has_product', $data, 
                    [
                        'idproduct' => $disponibility->getIdproduct()
                    ] 
                );
        } else {
            $this->db->insert('country_has_product', $data);
            $disponibility->setIdproduct($this->db->LastInsertId());
        }
    }

}
