<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;

class AdminServiceController extends ControllerAbstract {
    
    public function serviceListAction() {
        
        $services = $this->app['service.repository']->findAll();
        
        return $this->render(
                'admin/adminService.html.twig',
                [
                    'services' => $services
                ]
               
        );
    }
    
    public function editAction ($id = null) {
        
        $service = $this->app['service.repository']->find($id);
            
        if (is_null('$service')){
            $this->app->abort(404);
        }
        
        $errors = [];
        
        if (!empty($_POST)) {
            
            $service->setTarget($_POST['target']);
            $service->setContent($_POST['content']);
           
            //contrôle les champs du formulaire d'ajout
            
            if(empty($_POST['target'])){
                $errors['name'] = 'La cible est obligatoire (start-up / investisseur)';
            }
            
            if (empty($_POST['content'])) {
                $errors['content'] = 'Le contenu est obligatoire';
            }
            
            if (empty($errors)) {
                $this->app['product.repository']->save($service);
                $this->addFlashMessage('Le service est bien validé');
                return $this->redirectRoute('admin_service');
            } else {
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' .implode('</br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
                'admin/adminServiceEdit.html.twig',
                [
                    'service' => $service
                ]
         );
    }
    
}
