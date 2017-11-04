<?php

namespace Controller;

use Entity\Contact;

class ContactController extends ControllerAbstract {

  public function contactAction() {
    
    return $this->render(
                    'public/contact.html.twig'
    );
  }
  
  public function sendAction() {
    
    $contact = new Contact();
    
    $contact->setLastname($_POST['lastname'])
            ->setFirstname($_POST['firstname'])
            ->setemail($_POST['email'])
            ->setCity($_POST['city'])
            ->setCountry($_POST['country'])
            ->setOrganisation($_POST['organisation'])
            ->setMessage($_POST['message'])
            ;
            
    $this->app['contact.repository']->save($contact);
    
    $message = 'message à l\'utilisateur';
    
    return $this->render(
                'public/contact.html.twig',
                [
                    'message' => $message
                ]
         );
  }

}
