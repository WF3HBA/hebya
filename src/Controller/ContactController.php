<?php



namespace Controller;


class ContactController extends ControllerAbstract {
   
    public function contactAction() {
      
        return $this->render(
                'public/contact.html.twig'
        );
    }
}
