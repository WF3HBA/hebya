<?php

namespace Controller;

class LoginController extends ControllerAbstract {
    
    public function loginAction() {

        return $this->render(
                'public/login.html.twig'
        );
    }
}
