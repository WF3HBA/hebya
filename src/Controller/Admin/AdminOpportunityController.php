<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;
use Entity\Opportunity;

class AdminOpportunityController extends ControllerAbstract {
    
    public function opportunityListAction() {
          
        $opportunities = $this->app['opportunity.repository']->findAll();

        return $this->render(
                'admin/adminOpportunity.html.twig',
                [
                    'opportunities' => $opportunities
                ]
        );
    }
    
    public function editAction ($id = null){
        
            if (is_null($id)) {
                $opportunity = new Opportunity();
            } else {
                $opportunity = $this->app['opportunity.repository']->find($id);

                if (is_null($opportunity)) {
                    $this->app->abort(404);
                }
            } 

            $errors = [];

            if (!empty($_POST)) {
                
            $opportunity->setPosition($_POST['position']);
            $opportunity->setReference($_POST['reference']);
            $opportunity->setCity($_POST['city']);
            $opportunity->setField($_POST['field']);
            $opportunity->setContract_type($_POST['contract_type']);
            $opportunity->setPublication_date($_POST['publication_date']);
            $opportunity->setHiring_date($_POST['hiring_date']);
            $opportunity->setRequired_skills($_POST['require_skills']);
            $opportunity->setDescription($_POST['description']);
            $opportunity->setSalary($_POST['salary']);
            $opportunity->setStatus($_POST['status']);
            $opportunity->setIdcountry($_POST['idcountry']);

          
            // if (empty($_POST['firstname'])) {
            //     $errors['firstname'] = 'Prénom requis';
            // } elseif(strlen($_POST['firstname']) > 45){
            //     $errors['firstname'] = 'Maximum 45 caractères';
            // }
                   
            // if (empty($_POST['lastname'])) {
            //     $errors['lastname'] = 'Nom requis';
            // } elseif (strlen($_POST['lastname']) > 45) {
            //     $errors['website'] = 'Maximum 45 caracteres';
            // }
            
            // if (empty($_POST['title'])) {
            //     $errors['title'] = 'Titre requis';
            // } elseif (strlen($_POST['title']) > 45) {
            //     $errors['title'] = 'Maximum 45 characteres';
            // }
            
            // if (empty($_POST['description'])) {
            //     $errors['description'] = 'Description requise';
            // }
            
            if (empty($errors)) {
                
                $this->app['opportunity.repository']->save($opportunity);
                $this->addFlashMessage('Nouvelle offre ajouté');
                return $this->redirectRoute('admin_opportunity');
            } else {
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' .implode('</br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
                'admin/adminOpportunityEdit.html.twig',
                [
                    'opportunity' => $opportunity
                ]
         );
    }

    public function deleteAction($idopportunity) {
        $client = $this->app['opportunity.repository']->find($idopportunity);
        
        $client = $this->app['opportunity.repository']->delete($idopportunity);
        $this->addFlashMessage('l\'offre est supprimé');
        
        return $this->redirectRoute('admin_opportunity');
    }
    
}
