<?php

namespace Controller;


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
}

