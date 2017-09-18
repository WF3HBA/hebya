<?php




namespace Repository;

use Entity\Product;

use Entity\Provider;



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
                'SELECT * FROM product WHERE idproduct = :idproduct',
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
                'content' => $product->getContent(),
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
       
        
        
        
        $product = new Product();
        
        $product
            ->setIdproduct($data['idproduct'])
            ->setIdprovider($data['idprovider'])
            ->setName($data['name'])
            ->setWebsite($data['website'])
            ->setContent($data['content'])
            ->setField($data['field'])
            ->setStatus($data['status'])
               
        ;
        
        return $product;
    }
}
