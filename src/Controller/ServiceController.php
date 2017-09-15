<?php

namespace Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class ServiceController extends ControllerAbstract {
   
    public function serviceAction() {
      
        return $this->render(
                'service/service.html.twig'
        );
    }
    
    public function descriptionAction() {
        
        $service = $this->app['service.repository']->find($_GET['target']);
        
        $response = [
            'header' => $service->getHeader(),
            'content' => $service->getContent()
        ];
        
        return new JsonResponse($response);
    }
}
