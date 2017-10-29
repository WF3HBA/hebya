<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;
use Entity\Country;

class AdminCountryController extends ControllerAbstract {
    
    public function countryListAction() {
          
        $countries = $this->app['country.repository']->findAll();

        return $this->render(
                'admin/adminCountry.html.twig',
                [
                    'countries' => $countries
                ]
        );
    }
        
    public function editAction ($id = null) {

        if (is_null($id)) {
            $country = new Country();
        } else {
            $country = $this->app['country.repository']->find($id);

            if (is_null($country)) {
                $this->app->abort(404);
            }
        }
            
        $errors = [];

        if (!empty($_POST)) {
            
            $country->setName($_POST['name']);
            $country->setContinent($_POST['continent']);
            $country->setContent($_POST['content']);
            $country->setContact_name($_POST['contact_name']);
            $country->setContact_phone($_POST['contact_phone']);
            $country->setContact_email($_POST['contact_email']);
            $country->setContact_address($_POST['contact_address']);
            $country->setContact_city($_POST['contact_city']);
            $country->setStatus($_POST['status']);

            if (empty($_POST['name'])) {
                $errors['name'] = 'Prénom requis';
            } elseif(strlen($_POST['name']) > 45){
                $errors['name'] = 'Maximum 45 caractères';
            }

            if (empty($_POST['continent'])) {
                $errors['continent'] = 'Nom requis';
            } elseif (strlen($_POST['continent']) > 45) {
                $errors['continent'] = 'Maximum 45 caracteres';
            }

            if (empty($_POST['content'])) {
                $errors['content'] = 'Titre requis';
            } elseif (strlen($_POST['content']) > 700) {
                $errors['content'] = 'Maximum 200 characteres';
            }
               
            if (empty($errors)) {
                
                $this->app['country.repository']->save($country);
                $this->addFlashMessage('Nouveau membre ajouté');
                
                return $this->redirectRoute('admin_country');
            } else {
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' .implode('</br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
            'admin/adminCountryEdit.html.twig',
                [
                    'country' => $country
                ]
         );
    }
}