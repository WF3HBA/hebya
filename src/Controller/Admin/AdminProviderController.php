<?php


namespace Controller\Admin;

use Controller\ControllerAbstract;
use Entity\Provider;


class AdminProviderController extends ControllerAbstract {
    
     public function providertListAction() {
        
        $providers = $this->app['provider.repository']->findAll();
        
        return $this->render(
                'admin/adminProvider.html.twig',
                [
                    'providers' => $providers
                ]
               
        );
    }
    
    public function editAction ($id = null){
        
        if(is_null($id)){
            $provider = new Provider();
        } else{
            $provider = $this->app['provider.repository']->find($id);
            
            if(is_null($provider)){
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        
        if(!empty($_POST)){
            
            
            $provider->setLastname($_POST['lastname']);
            $provider->setFirstname($_POST['firstname']);
            $provider->setCompany($_POST['company']);
            $provider->setEmail($_POST['email']);
            $provider->setPhone($_POST['phone']);
            $provider->setAddress($_POST['address']);
            $provider->setCountry($_POST['country']);
            
            //contrôle les champs du formulaire d'ajout
            if(empty($_POST['lastname'])){
                $errors['lastname'] = 'lastname require';
            } elseif(strlen($_POST['lastname']) > 30){
                $errors['lastname'] = 'maximum 30 characteres';
            }
            
            if(empty($_POST['firstname'])){
                $errors['firstname'] = 'firstname require';
            } elseif(strlen($_POST['firstname']) > 30){
                $errors['firstname'] = 'maximum 30 characteres';
            }
            
            
            if(empty($_POST['company'])){
                $errors['company'] = 'company require';
            } elseif(strlen($_POST['company']) > 30){
                $errors['company'] = 'maximum 30 characteres';
            }
            
            
            if(empty($_POST['email'])){
                $errors['email'] = 'email require';
            } elseif(strlen($_POST['email']) > 30){
                $errors['email'] = 'maximum 30 characteres';
            }
            
            
            if(empty($_POST['phone'])){
                $errors['phone'] = 'phone require';
            } elseif(strlen($_POST['phone']) > 30){
                $errors['phone'] = 'maximum 30 characteres';
            }
            
            
            if(empty($_POST['address'])){
                $errors['adrress'] = 'address require';
            } elseif(strlen($_POST['address']) > 30){
                $errors['address'] = 'maximum 30 characteres';
            }
            
            
            if(empty($_POST['country'])){
                $errors['country'] = 'country require';
            } elseif(strlen($_POST['country']) > 30){
                $errors['country'] = 'maximum 30 characteres';
            }
            
            if(empty($errors)){
                $this->app['provider.repository']->save($provider);
                $this->addFlashMessage('new provider in database');
                return $this->redirectRoute('admin_provider');
            } else {
                $message = '<strong>Le formulaire contient des erreur</strong>';
                $message .= '<br>' .implode('</br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
                'admin/providerEdit.html.twig',
                ['provider' => $provider]
         );
    }
    
    public function deleteAction($id){
        $provider = $this->app['provider.repository']->find($id);
        
        $provider = $this->app['provider.repository']->delete($provider);
        $this->addFlashMessage('le provider est supprimé');
        
        return $this->redirectRoute('admin_provider');
    }
    
}
