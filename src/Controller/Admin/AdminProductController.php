<?php


namespace Controller\Admin;

use Controller\ControllerAbstract;


class AdminProductController extends ControllerAbstract {
    
      public function productListAction() {
        
        $products = $this->app['product.repository']->findAll();
        
        return $this->render(
                'admin/adminProduct.html.twig',
                [
                    'products' => $products
                ]
               
        );
    }
}
