<?php

namespace Controller;

class RegisterController extends ControllerAbstract {
    
    public function registerAction() {

        return $this->render(
                'public/register.html.twig'
        );
    }
 }
    

