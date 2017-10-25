<?php

namespace Controller;

class ProfilController extends ControllerAbstract {
    
    public function profilAction() {
        
        return $this->render(
            'public/profil.html.twig'
        );
    }
    
}
