<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

/**
 * Description of LoginController
 *
 * @author erwan
 */
class LoginController extends ControllerAbstract {
    
    public function loginAction() {
    

        return $this->render(
                'register/login.html.twig'
               
        );
    }
}
