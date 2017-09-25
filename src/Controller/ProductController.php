<?php



namespace Controller;

use Controller\ControllerAbstract;

use Symfony\Component\HttpFoundation\JsonResponse;

class ProductController extends ControllerAbstract {
     
    public function productAction() {
      
        $countries = $this->app['country.repository']->findAll();
        $products = $this->app['product.repository']->findPublic();
//        $fields = $this->app['product.repository']->findByField();
         
        return $this->render(
                'product/product.html.twig',
                [
                     'countries' => $countries,
                     'products' => $products,
//                     'fields' => $fields
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
        
         $products = $this->app['product.repository']->findByCountryAndField($_GET['idcountry'], $_GET['field']);
         
         
         return $this->render(
            'product/productList.html.twig',
             [
                 'products' => $products
             ]
        );
         
    }
    
//    public function fieldSelect(){
//        
//         $fields = $this->app['product.repository']->findByField($_GET['field']);
//         
//         $response = 
//            [
//                'fields' => $fields
//            ];
//         
//        $reponse = new JsonResponse($response);
//        dump($reponse);
//    }
    
    
}

