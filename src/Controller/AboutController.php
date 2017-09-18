<?php

namespace Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class AboutController extends ControllerAbstract {
    
    public function aboutAction() {
      
        $abouts = $this->app['about.repository']->findAll();
        
        $teamMembers = $this->app['team.repository']->findAll();
         
        return $this->render(
                
                'about/about.html.twig',
                [
                    'abouts' => $abouts,
                    'teamMembers' => $teamMembers
                ]
        );
    }
}
