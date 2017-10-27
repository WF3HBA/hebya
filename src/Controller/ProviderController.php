<?php

namespace Controller;

class ProviderController extends ControllerAbstract {
    
    public function providerAction() {
    
        $countries = $this->app['country.repository']->findAll();
        
        $providers = $this->app['provider.repository']->findAll();

        return $this->render(
                'public/provider.html.twig',
                [
                    'countries' => $countries,
                    'providers' => $providers
                ]
        );
    }
    
    public function countrySelect(){
        
         $providers = $this->app['provider.repository']->findByCountryAndField($_GET['country']);
         
         
         return $this->render(
            'public/providerList.html.twig',
             [
                 'providers' => $providers
             ]
        );
         
    }
}
