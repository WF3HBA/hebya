<?php


namespace Controller;

class ClientController extends ControllerAbstract {
    
    public function clientAction() {
      
        return $this->render(
                'client/client.html.twig'
        );
    }
}
