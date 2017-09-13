<?php

namespace Controller;

class InnovatorController extends ControllerAbstract {
    
    public function innovatorAction() {
      
        return $this->render(
                'innovator/innovator.html.twig'
        );
    }
}
