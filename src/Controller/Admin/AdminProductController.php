<?php


namespace Controller\Admin;

use Controller\ControllerAbstract;
use Entity\Product;


class AdminProductController extends ControllerAbstract {
    
      public function productListAction() {
        
        $products = $this->app['product.repository']->findAll();
        
        return $this->render(
                'admin/adminProduct.html.twig',
                [
                    'products' => $products
                ]
               
        );
    }
    
      public function editAction ($id = null){
        
        if(is_null($id)){
            $product = new Product();
        } else{
            $product = $this->app['product.repository']->find($id);
            
            if(is_null($product)){
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        
        if(!empty($_POST)){
            
            
          
           
            $product->setName($_POST['name']);
            $product->setWebsite($_POST['website']);
            $product->setContent($_POST['content']);
            $product->setField($_POST['field']);
           
            
            //contrôle les champs du formulaire d'ajout
            if(empty($_POST['name'])){
                $errors['name'] = 'name require';
            } elseif(strlen($_POST['name']) > 30){
                $errors['name'] = 'maximum 30 characteres';
            }
           
                   
            if(empty($_POST['website'])){
                $errors['website'] = 'website require';
            } elseif(strlen($_POST['website']) > 30){
                $errors['website'] = 'maximum 30 characteres';
            }
            
            
            if(empty($_POST['content'])){
                $errors['content'] = 'content require';
            } elseif(strlen($_POST['content']) > 1000){
                $errors['content'] = 'maximum 1000 characteres';
            }
            
            
            if(empty($_POST['field'])){
                $errors['field'] = 'field require';
            } elseif(strlen($_POST['field']) > 30){
                $errors['field'] = 'maximum 30 characteres';
            }
            
            
            if(empty($errors)){
                echo 'là';
                $this->app['product.repository']->save($product);
                $this->addFlashMessage('new product in database');
                return $this->redirectRoute('admin_product');
            } else {
                var_dump($errors);
                $message = '<strong>Le formulaire contient des erreur</strong>';
                $message .= '<br>' .implode('</br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
                'admin/productEdit.html.twig',
                ['product' => $product]
         );
    }
    
    public function deleteAction($id){
        $product = $this->app['product.repository']->find($id);
        
        $product = $this->app['product.repository']->delete($product);
        $this->addFlashMessage('le product est supprimé');
        
        return $this->redirectRoute('admin_product');
    }
}
