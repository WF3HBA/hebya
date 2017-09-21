<?php

namespace Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class ServiceController extends ControllerAbstract {
   
    public function serviceAction() {
        
        $services = $this->app['service.repository']->findAll();
      
        return $this->render(
                'service/service.html.twig',
                [
                    'services' => $services
                ]
        );
    }
    
    public function targetAction() {
        
        $service = $this->app['service.repository']->find($_GET['id']);
        
        $response = [
            'content' => $service->getContent()
        ];
        
        return new JsonResponse($response);
    }
}
