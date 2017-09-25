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
    
    public function findPublic(){
    
        $query = <<<SQL
                
        SELECT p.*,
                    pr.company       
        FROM product p
        JOIN provider pr ON pr.idprovider = p.idprovider
        WHERE p.status = "public"
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
    
    public function save(Product $product){

        $data =
            [
                'idproduct' => $product->getIdproduct(),
                'idprovider' => $product->getIdprovider(),
                'name' => $product->getName(),
                'website' => $product->getWebsite(),
                'summary' => $product->getSummary(),
                'description' => $product->getDescription(),
                'field' => $product->getField(),
                'status' => $product->getStatus()
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
    
    public function findByCountryAndField($idCountry, $field){
        
        $query = <<<SQL
    SELECT c.name,
                chp.idcountry,
                 p.*,
                 pr.company 
                
    FROM product p
    JOIN country_has_product chp ON chp.idproduct = p.idproduct
    JOIN country c ON c.idcountry = chp.idcountry
    JOIN provider pr ON pr.idprovider = p.idprovider
    WHERE true 
SQL;
        
        $parameters = [];
        
        if (!empty($idCountry)) {
            $query .= ' AND chp.idcountry = :idcountry';
            $parameters[':idcountry'] = $idCountry;
        }
        
        if (!empty($field)) {
            $query .= ' AND p.field = :field';
            $parameters[':field'] = $field;
        }
        
        $dbProducts = $this->db->fetchAll(
                $query,
                $parameters
            );
    
            $products = [];    
        
            foreach($dbProducts as $dbProduct){
                $products[] = $this->buildEntity($dbProduct);
            }
            
            return $products;
    }
    
    
    
    public function findByField(Field $field){
          
        $query = <<<SQL
    SELECT p.*    
    FROM product p 
    WHERE p.field = :field
    
SQL;
        
        $dbProducts = $this->db->fetchAll(
                $query,
                [
                    ':field' => $field->getField($field)
                ]
            );
    
            $products = [];    
        
            foreach($dbProducts as $dbProduct){
                $products[] = $this->buildEntity($dbProduct);
            }
            
            return $products;
    }

}
