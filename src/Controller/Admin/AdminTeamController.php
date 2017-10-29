<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;
use Entity\TeamMember;

class AdminTeamController extends ControllerAbstract {
    
        public function teamListAction() {
          
            $teamMembers = $this->app['team.repository']->findAll();

            return $this->render(
                    'admin/adminTeam.html.twig',
                    [
                        'teamMembers' => $teamMembers
                    ]
            );
        }
        
        public function editAction ($id = null){
        
            if (is_null($id)) {
                $teamMember = new TeamMember();
            } else {
                $teamMember = $this->app['team.repository']->find($id);

                if (is_null($teamMember)) {
                    $this->app->abort(404);
                }
            }

            $errors = [];

            if (!empty($_POST)) {
                
            $teamMember->setFirstname($_POST['firstname']);
            $teamMember->setLastname($_POST['lastname']);
            $teamMember->setTitle($_POST['title']);
            $teamMember->setDescription($_POST['description']);
            $teamMember->setLinkedin($_POST['linkedin']);
            $teamMember->setPicture($_POST['picture']);
          
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
    

    public function deleteAction($id) {
        $teamMember= $this->app['team.repository']->find($id);
        
        $teamMember = $this->app['team.repository']->delete($teamMember);
        $this->addFlashMessage('Le membre est supprimé');
        
        return $this->redirectRoute('admin_team');
    }
    
}
