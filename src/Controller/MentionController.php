<?php



namespace Controller;


class MentionController extends ControllerAbstract {
    
    public function mentionAction() {
      
        return $this->render(
                'mention/mention.html.twig'
        );
    }
   
}
