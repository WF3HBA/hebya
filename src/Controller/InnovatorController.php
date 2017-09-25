<?php

namespace Controller;

class InnovatorController extends ControllerAbstract {
    
    public function innovatorAction() {
    
        $countries = $this->app['country.repository']->findAll();
        
        $providers = $this->app['provider.repository']->findAll();

        return $this->render(
                'innovator/innovator.html.twig',
                [
                    'countries' => $countries,
                    'providers' => $providers
                ]
        );
    }
    
    public function countrySelect(){
        
         $providers = $this->app['provider.repository']->findByCountryAndField($_GET['country']);
         
         
         return $this->render(
            'innovator/innovatorList.html.twig',
             [
                 'providers' => $providers
             ]
        );
         
    }
}
