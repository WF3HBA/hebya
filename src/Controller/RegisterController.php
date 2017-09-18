<?php



namespace Controller;


class RegisterController extends ControllerAbstract {
    
    public function registerAction() {
    

        return $this->render(
                'register/register.html.twig'
               
        );
    }
 }
    

