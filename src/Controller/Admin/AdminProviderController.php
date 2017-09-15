<?php


namespace Controller\Admin;


use Controller\ControllerAbstract;


class AdminProviderController extends ControllerAbstract {
    
     public function providertListAction() {
        
        $providers = $this->app['provider.repository']->findAll();
        
        return $this->render(
                'admin/adminProvider.html.twig',
                [
                    'providers' => $providers
                ]
               
        );
    }
}
