<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;

class AdminAboutController extends ControllerAbstract {
   
    public function aboutListAction() {
        
        $abouts = $this->app['about.repository']->findAll();
        
        return $this->render(
                'admin/adminAbout.html.twig',
                [
                    'abouts' => $abouts
                ]
               
        );
    }
    
    public function editAction ($id = null) {
        
        $about = $this->app['about.repository']->find($id);
            
        if (is_null('$about')){
            $this->app->abort(404);
        }
        
        $errors = [];
        
        if (!empty($_POST)) {
            
            $about->setSection($_POST['section']);
            $about->setTitle($_POST['title']);
            $about->setContent($_POST['content']);
           
            //contrôle les champs du formulaire d'ajout
            
            if (empty($_POST['section'])) {
                $errors['section'] = 'La section est obligatoire';
            }
            
            if (empty($_POST['title'])) {
                $errors['title'] = 'Le titre est obligatoire';
            }
            
            if (empty($_POST['content'])) {
                $errors['content'] = 'Le contenu est obligatoire';
            }
            
            if (empty($errors)) {
                $this->app['about.repository']->save($about);
                $this->addFlashMessage('Le service est bien validé');
                return $this->redirectRoute('admin_about');
            } else {
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' .implode('</br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
                'admin/adminAboutEdit.html.twig',
                [
                    'about' => $about
                ]
         );
    }
    
}
