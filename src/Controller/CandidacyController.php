<?php

namespace Controller;

use Entity\Candidacy;
use Entity\Opportunity;

class CandidacyController extends ControllerAbstract {
    
    public function candidacyAction($postId = null) {
        
        $opportunity = $this->app['opportunity.repository']->find($postId);
        
        if($_POST){
           
            if(empty($_POST['firstname'])){
                $errors['firstname'] = 'firstname require';
            } elseif(strlen($_POST['firstname']) > 45){
                $errors['firstname'] = 'maximum 45 characteres';
            }
                   
            if(empty($_POST['lastname'])){
                $errors['lastname'] = 'lastname require';
            } elseif(strlen($_POST['lastname']) > 45){
                $errors['lastname'] = 'maximum 30 characteres';
            }
            
            if(empty($_POST['email'])){
                $errors['email'] = 'email require';
            } 
            
            if(empty($_POST['phone'])){
                $errors['phone'] = 'phone require';
            } 
            
            if(empty($_POST['address'])){
                $errors['address'] = 'address require';
            } 
            
            if(empty($_POST['country'])){
                $errors['country'] = 'country require';
            }
           
            
            if(empty($errors)){
                
                $opportunity = new Opportunity();
                
                $opportunity->setIdopportunity($_POST['idopportunity']);
                
                $candidacy = new Candidacy();
            
                $candidacy->setFirstname($_POST['firstname']);
                $candidacy->setLastname($_POST['lastname']);
                $candidacy->setEmail($_POST['email']);
                $candidacy->setPhone($_POST['phone']);
                $candidacy->setAddress($_POST['address']);
                $candidacy->setCountry($_POST['country']);
                $candidacy->setOpportunity($opportunity);
                    
                $this->app['candidacy.repository']->save($candidacy);
                
                $this->addFlashMessage('new candidacy in database');
                return $this->redirectRoute('candidacy');
                
            } else {
                var_dump($errors);
                $message = '<strong>Le formulaire contient des erreur</strong>';
                $message .= '<br>' .implode('</br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
      
        return $this->render(
                'candidacy/candidacy.html.twig',
                [
                   'opportunity' => $opportunity 
                ]
        );
        
    }
    
    
    
    
    
    
    
    
    public function editAction ($id = null){
        
        if(is_null($id)){
            $candidacy = new Candidacy();
        } else{
            $candidacy = $this->app['candidacy.repository']->find($id);
           
            
            if(is_null($candidacy)){
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        
        if(!empty($_POST)){
            
            
          
           
            $candidacy->setFirstname($_POST['firstname']);
            $candidacy->setLastname($_POST['lastname']);
            $candidacy->setEmail($_POST['email']);
            $candidacy->setPhone($_POST['phone']);
            $candidacy->setAdress($_POST['address']);
            $candidacy->setCountry($_POST['country']);
           
            
            //contrôle les champs du formulaire d'ajout
            if(empty($_POST['firstname'])){
                $errors['firstname'] = 'firstname require';
            } elseif(strlen($_POST['firstname']) > 30){
                $errors['firstname'] = 'maximum 30 characteres';
            }
           
                   
            if(empty($_POST['lastname'])){
                $errors['lastname'] = 'lastname require';
            } elseif(strlen($_POST['lastname']) > 30){
                $errors['lastname'] = 'maximum 30 characteres';
            }
            
            
            if(empty($_POST['email'])){
                $errors['email'] = 'email require';
            } 
            
            
            if(empty($_POST['phone'])){
                $errors['phone'] = 'phone require';
            } 
            
            
            if(empty($_POST['adress'])){
                $errors['address'] = 'address require';
            } 
            
            
            if(empty($_POST['country'])){
                $errors['country'] = 'country require';
            } 
            
            if(empty($errors)){
                echo 'là';
                $this->app['candidacy.repository']->save($candidacy);
                $this->addFlashMessage('new candidacy in database');
                return $this->redirectRoute('candidacy');
            } else {
                var_dump($errors);
                $message = '<strong>Le formulaire contient des erreur</strong>';
                $message .= '<br>' .implode('</br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
                'candidacy/candidacy.html.twig',
                ['candidacy' => $candidacy]
         );
    }
    
    
    
    
    
}
