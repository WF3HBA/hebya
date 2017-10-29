<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;





class AdminController extends ControllerAbstract{
   
    
    public function adminAction() {
        
       
        
        return $this->render(
                'admin/admin.html.twig'
                
               
        );
    }
}


