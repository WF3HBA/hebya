<?php




namespace Repository;

use Entity\Product;

use Entity\Provider;



class ProductRepository extends RepositoryAbstract {
    
     public function findAll(){
    
        $query = <<<SQL
                
SELECT p.*,
       pr.company AS provider_company         
FROM product p
JOIN provider pr ON pr.idprovider = p.idprovider               
ORDER BY p.idproduct

SQL;
       
            $dbProducts = $this->db->fetchAll($query);
            $Products = [];
            
            foreach ($dbProducts as $dbProduct){
                $Products[] = $this->buildEntity($dbProduct);
            }
            
            return $Products;
    }
    
    private function buildEntity(array $data){
       
        $provider = new Provider();
            
        $provider
                ->setIdprovider($data['idprovider'])
                ->setCompany($data['provider_company'])
        ;
        
        
        $product = new Product();
        
        $product
            ->setIdproduct($data['idproduct'])
            ->setIdprovider($data['idprovider'])
            ->setName($data['name'])
            ->setWebsite($data['website'])
            ->setCompany($provider)   
        ;
        
        return $product;
    }
}
