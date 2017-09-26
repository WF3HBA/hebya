<?php

namespace Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController extends ControllerAbstract {
    
    public function indexAction() {
        
        
//         $country = $this->app['country.repository']->find($id);
         $countries = $this->app['country.repository']->findAll();
        return $this->render(
                'index.html.twig',
                 [
                     
                      'countries' =>$countries
                ]
        );
    }
    
    public function displayNameCountry(){
          
        $country = $this->app['country.repository']->findByCountry($_GET['name']);
         
        dump($country);
        
        return $this->render(
                'mapAfrica.html.twig',
                [
                    'country' => $country
                ]
            );
    }
}