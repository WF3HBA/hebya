<?php


namespace Controller\Admin;

use Controller\ControllerAbstract;


class adminProductController extends ControllerAbstract {
    
      public function productListAction() {
        
        $products = $this->app['product.repository']->findAll();
        
        return $this->render(
                'Admin/adminProduct.html.twig',
                [
                    'products' => $products
                ]
               
        );
    }
}
