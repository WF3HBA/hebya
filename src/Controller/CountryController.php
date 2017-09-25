<?php


namespace Controller;

use Controller\ControllerAbstract;

class CountryController extends ControllerAbstract{
    
    public function countryAction() {
      
        $countries = $this->app['country.repository']->findAll();
       

        return $this->render(
                'index.html.twig',
                [
                     'countries' => $countries,
                      
                ]
        );
    }
}
