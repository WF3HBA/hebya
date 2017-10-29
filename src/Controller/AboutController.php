<?php

namespace Controller;

class AboutController extends ControllerAbstract {
    
    public function aboutAction() {
      
        $abouts = $this->app['about.repository']->findAll();
        
        $teamMembers = $this->app['team.repository']->findAll();
         
        return $this->render(
                
                'public/about.html.twig',
                [
                    'abouts' => $abouts,
                    'teamMembers' => $teamMembers
                ]
        );
    }
}
