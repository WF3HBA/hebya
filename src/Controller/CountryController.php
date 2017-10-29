<?php

namespace Controller;

use Controller\ControllerAbstract;

use Symfony\Component\HttpFoundation\JsonResponse;

class CountryController extends ControllerAbstract{
    
    public function countryAction() {
      
        $countries = $this->app['country.repository']->findAll();

        return $this->render(
                'index.html.twig',
                [
                     'countries' => $countries
                ]
        );
    }

    public function statusAction(){

        $activeCountries = $this->app['country.repository']->findByStatus('active');
        $prospectCountries = $this->app['country.repository']->findByStatus('prospect');
        $inactiveCountries = $this->app['country.repository']->findByStatus('inactive');

        $response = [
            'prospect' => $prospectCountries,
            'inactive' => $inactiveCountries,
            'active' => $activeCountries 
        ];

        return new JsonResponse($response);   
    }

    
}
