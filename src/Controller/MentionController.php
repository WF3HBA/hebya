<?php

namespace Controller;

class MentionController extends ControllerAbstract {
    
    public function mentionAction() {
      
        return $this->render(
                'public/mentions.html.twig'
        );
    }
   
}
