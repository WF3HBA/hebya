<?php

namespace Controller;

use Repository\CountryRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController extends ControllerAbstract {

  public function indexAction() {
    
    $countries = $this->app['country.repository']->findAll();
    return $this->render(
        'index.html.twig', 
            [
                'countries' => $countries
            ]
    );
  }

  public function countryAction() {

    $country = $this->app['country.repository']->findByName($_GET['country']);
    
    $response = [
        'country_name' => $country->getName(),
        'contact_name' => $country->getContact_name(),
        'content'=> $country->getContent()
    ];
            
    return new JsonResponse($response);
  }

}

