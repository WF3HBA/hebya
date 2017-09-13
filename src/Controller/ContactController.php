<?php



namespace Controller;


class ContactController extends ControllerAbstract {
   
    public function contactAction() {
      
        return $this->render(
                'contact/contact.html.twig'
        );
    }
}
