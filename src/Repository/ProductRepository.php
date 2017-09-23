<?php

namespace Repository;

use Entity\Disponibility;
use Entity\Product;
use Entity\Provider;
use function dump;

class ProductRepository extends RepositoryAbstract {
    
    public function findAll(){
    
        $query = <<<SQL
                
        SELECT p.*,
                    pr.company       
        FROM product p
        JOIN provider pr ON pr.idprovider = p.idprovider               
        ORDER BY p.idproduct

SQL;
       
            $dbProducts = $this->db->fetchAll($query);
            $products = [];
            
            foreach ($dbProducts as $dbProduct){
                $products[] = $this->buildEntity($dbProduct);
            }
            
            return $products;
     }
     
    
    public function find($id){
         $dbProduct = $this->db->fetchAssoc(
                'SELECT p.*,
                            pr.company 
                FROM product p 
                JOIN provider pr ON pr.idprovider = p.idprovider 
                WHERE idproduct = :idproduct',
                [
                    ':idproduct' => $id
                ]
            );

            if(!empty($dbProduct)){
                return $this->buildEntity($dbProduct);
            }
    }
    
    public function findDisponibility($id) {
       
        $dbDisponibilities = $this->db->fetchAll (
                'SELECT idcountry 
                FROM country_has_product
                WHERE idproduct = :idproduct',
                [
                    ':idproduct' => $id
                ]
            );
            
            $disponibility = [];
        
            foreach ($dbDisponibilities as $dbDisponibility) {
                $disponibility[] = $this->buildDisponibility($dbDisponibility);
            }
    
            return $disponibility;
    }
    
    
    public function save(Product $product){

        $data =
            [
                'idproduct' => $product->getIdproduct(),
                'idprovider' => $product->getIdprovider(),
                'name' => $product->getName(),
                'website' => $product->getWebsite(),
                'description' => $product->getDescription(),
                'field' => $product->getField(),
                'status' => $product->getStatus(),
                'summary' => $product->getSummary()
            ];

        if ($product->getIdproduct()){
            $this->db->update('product', $data, 
                    [
                        'idproduct'=>$product->getIdproduct()
                    ] 
                );
        } else {
            $this->db->insert('product', $data);
            $product->setIdproduct($this->db->LastInsertId());
        }
    }
    
    public function delete(Product $product){
        
        $this->db->delete('product', ['idproduct' => $product->setIdproduct()]);
    }
    
    
    private function buildEntity(array $data){
       
        $provider = new Provider();
        
        $provider
                ->setIdprovider($data['idprovider'])
                ->setCompany($data['company'])
        ;
        
        $product = new Product();
        
        $product
            ->setIdproduct($data['idproduct'])
            ->setIdprovider($data['idprovider'])
            ->setName($data['name'])
            ->setWebsite($data['website'])
            ->setDescription($data['description'])
            ->setField($data['field'])
            ->setStatus($data['status'])
            ->setSummary($data['summary'])
            ->setProvider($provider)       
        ;
        
        return $product;
    }
    
    public function findByCountry($id){
        
        $query = <<<SQL
    SELECT c.name,
           chp.idcountry,
           p.*,
           pr.company 
                
    FROM product p
    JOIN country_has_product chp ON chp.idproduct = p.idproduct
    JOIN country c ON c.idcountry = chp.idcountry
    JOIN provider pr ON pr.idprovider = p.idprovider
    WHERE chp.idcountry = :idcountry
    
SQL;
        
        $dbProducts = $this->db->fetchAll(
                $query,
                [
                    ':idcountry' => $id
                ]
            );
    
            $products = [];    
        
            foreach($dbProducts as $dbProduct){
                $products[] = $this->buildEntity($dbProduct);
            }
            
            return $products;
    }

}
