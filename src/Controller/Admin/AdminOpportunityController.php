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
            $opportunity->setField($_POST['field']);
            $opportunity->setCity($_POST['city']);
            $opportunity->setContract_type($_POST['contract_type']);
            $opportunity->setPublication_date($_POST['publication_date']);
            $opportunity->setPublication_date($_POST['publication_date']);
          
            if (empty($_POST['firstname'])) {
                $errors['firstname'] = 'Prénom requis';
            } elseif(strlen($_POST['firstname']) > 45){
                $errors['firstname'] = 'Maximum 45 caractères';
            }
                   
            if (empty($_POST['lastname'])) {
                $errors['lastname'] = 'Nom requis';
            } elseif (strlen($_POST['lastname']) > 45) {
                $errors['website'] = 'Maximum 45 caracteres';
            }
            
            if (empty($_POST['title'])) {
                $errors['title'] = 'Titre requis';
            } elseif (strlen($_POST['title']) > 45) {
                $errors['title'] = 'Maximum 45 characteres';
            }
            
            if (empty($_POST['description'])) {
                $errors['description'] = 'Description requise';
            }
            
            if (empty($errors)) {
                $this->app['team.repository']->save($teamMember);
                $this->addFlashMessage('Nouveau membre ajouté');
                return $this->redirectRoute('admin_team');
            } else {
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' .implode('</br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
                'admin/adminTeamEdit.html.twig',
                [
                    'teamMember' => $teamMember
                ]
         );
    }
    
}
