<?php


namespace Controller;

class ClientController extends ControllerAbstract {
    
    public function clientAction() {
      
        $countries = $this->app['country.repository']->findAll();
        
        $clients = $this->app['client.repository']->findAll();
         
        return $this->render(
                
                'client/client.html.twig',
                [
                    'countries' => $countries,
                    'clients' => $clients
                ]
        );
    }
}
