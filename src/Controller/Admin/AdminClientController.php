<?php



namespace Controller\Admin;

use Controller\ControllerAbstract;
use Entity\Client;



class AdminClientController extends ControllerAbstract{
    
    public function clientListAction() {
        
        $clients = $this->app['client.repository']->findAll();
        
        return $this->render(
                'admin/adminClient.html.twig',
                [
                    'clients' => $clients
                ]
            );
    }
    
     public function editAction ($id = null){
        
        if(is_null($id)){
            $client = new Client();
        } else{
            $client = $this->app['client.repository']->find($id);
            
            if(is_null($client)){
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        
        if(!empty($_POST)){
            
            
                $client->setLastname($_POST['lastname']);
                $client->setFirstname($_POST['firstname']);
                $client->setCompany($_POST['company']);
                $client->setCompany_type($_POST['company_type']);
               $client->setEmail($_POST['email']);
                $client->setPhone($_POST['phone']);
               $client->setAddress($_POST['address']);
              $client->setCountry($_POST['country']);
              $client->setPassword($_POST['password']);
//              $client->setStatus($_POST['status']);
//            
//            //contrôle les champs du formulaire d'ajout
//            if(empty($_POST['lastname'])){
//                $errors['lastname'] = 'lastname require';
//            } elseif(strlen($_POST['lastname']) > 30){
//                $errors['lastname'] = 'maximum 30 characteres';
//            }
//            
//            if(empty($_POST['firstname'])){
//                $errors['firstname'] = 'firstname require';
//            } elseif(strlen($_POST['firstname']) > 30){
//                $errors['firstname'] = 'maximum 30 characteres';
//            }
              if(empty($_POST['password'])){
                  $errors['password'] = 'password require';
              }
//            if(empty($_POST['company'])){
//                $errors['company'] = 'company require';
//            } elseif(strlen($_POST['company']) > 30){
//                $errors['company'] = 'maximum 30 characteres';
//            }
//            
//            
//            if(empty($_POST['email'])){
//                $errors['email'] = 'email require';
//            } elseif(strlen($_POST['email']) > 30){
//                $errors['email'] = 'maximum 30 characteres';
//            }
//            
//            
//            if(empty($_POST['phone'])){
//                $errors['phone'] = 'phone require';
//            } elseif(strlen($_POST['phone']) > 30){
//                $errors['phone'] = 'maximum 30 characteres';
//            }
//            
//            
//            if(empty($_POST['address'])){
//                $errors['adrress'] = 'address require';
//            } elseif(strlen($_POST['address']) > 30){
//                $errors['address'] = 'maximum 30 characteres';
//            }
//            
//            
//            if(empty($_POST['country'])){
//                $errors['country'] = 'country require';
//            } elseif(strlen($_POST['country']) > 30){
//                $errors['country'] = 'maximum 30 characteres';
//            }
//            
            if(empty($errors)){
                $client->setPassword($this->app['client.manager']->encodePassword($_POST['password']));
                $this->app['client.repository']->save($client);
                
                $this->addFlashMessage('new client in database');
                return $this->redirectRoute('admin_client');
            } else {
                $message = '<strong>Le formulaire contient des erreur</strong>';
                $message .= '<br>' .implode('</br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
//        }
              
        }
            return $this->render(
                    'admin/clientEdit.html.twig',
                    ['client' => $client]
             );
       
    }
    
    public function deleteAction($id) {
        $client = $this->app['client.repository']->find($id);
        
        $client = $this->app['client.repository']->delete($client);
        $this->addFlashMessage('le client est supprimé');
        
        return $this->redirectRoute('admin_client');
    }
}
