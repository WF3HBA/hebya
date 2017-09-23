<?php



namespace Controller;

use Controller\ControllerAbstract;

use Symfony\Component\HttpFoundation\JsonResponse;

class ProductController extends ControllerAbstract {
     
    public function productAction() {
      
        $countries = $this->app['country.repository']->findAll();
        $products = $this->app['product.repository']->findAll();
         
        return $this->render(
                'product/product.html.twig',
                [
                     'countries' => $countries,
                     'products' => $products
                ]
        );
    }
    
     
    public function productIdAction($id = null) {
      
        $country = $this->app['country.repository']->find($id);
        
        $product = $this->app['product.repository']->find($id);
         
        return $this->render(
                'product/productId.html.twig',
                [
                     'country' => $country,
                      'product' => $product
                ]
        );
    }
    
    public function countrySelect(){
        
         $products = $this->app['product.repository']->findByCountry($_GET['idcountry']);
         
         $response = 
            [
                'products' => $products
            ];
         
        $reponse = new JsonResponse($response);
        dump($reponse);
    }
    
    
}

