<?php

namespace Controller;

class ServiceController extends ControllerAbstract {
   
    public function serviceAction() {
      
        return $this->render(
                'service/service.html.twig'
        );
    }
}
