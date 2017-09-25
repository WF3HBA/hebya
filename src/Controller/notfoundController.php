<?php

namespace Controller;

class notfoundController extends ControllerAbstract {
    
    public function notfoundAction() {
        
        return $this->render(
            'notfound/notfound.html.twig'
        );
    }
    
}
