<?php

namespace Controller;

use Repository\CountryRepository;

class IndexController extends ControllerAbstract {
    
    public function indexAction() {
        
//      $country = $this->app['country.repository']->find($id);
        $countries = $this->app['country.repository']->findAll();
        return $this->render(
                'index.html.twig',
                 [
//                    'country' => $country,
                      'countries' =>$countries
                ]
        );
    }
}