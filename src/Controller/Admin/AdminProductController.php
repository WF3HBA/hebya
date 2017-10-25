<?php


namespace Controller\Admin;

use Controller\ControllerAbstract;
use Entity\Disponibility;
use Entity\Product;
use Entity\Provider;


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
        
        if (is_null($id)) {
            $product = new Product();
            $provider = new Provider();
            $disponibility = new Disponibility();
        } else {
            $product = $this->app['product.repository']->find($id);
            $disponibility = $this->app['disponibility.repository']->findCountriesByProduct($id);
            $provider = $this->app['provider.repository']->find($id);
            
            if (is_null($product)) {
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        
        if (!empty($_POST)) {
           
            $product->setName($_POST['name']);
            $product->setWebsite($_POST['website']);
            $product->setSummary($_POST['summary']);
            $product->setDescription($_POST['description']);
            $product->setPicture($_POST['picture']);
            $product->setField($_POST['field']);
            $product->setStatus($_POST['status']);
            
            //contrôle les champs du formulaire d'ajout
            if (empty($_POST['name'])) {
                $errors['name'] = 'name require';
            } elseif (strlen($_POST['name']) > 45) {
                $errors['name'] = 'maximum 30 characteres';
            }
                   
            if (empty($_POST['website'])) {
                $errors['website'] = 'website require';
            } elseif (strlen($_POST['website']) > 45) {
                $errors['website'] = 'maximum 30 characteres';
            }
            
            if (empty($_POST['description'])) {
                $errors['description'] = 'content require';
            } 
            
            if (empty($_POST['field'])) {
                $errors['field'] = 'field require';
            } elseif(strlen($_POST['field']) > 45) {
                $errors['field'] = 'maximum 30 characteres';
            }

            
            if (empty($errors)) {
                
                $this->app['disponibility.repository']->deleteByProduct($_POST['idproduct']);
                
                if (!empty($_POST['product-has-country'])) {
                    
                    foreach ($_POST['product-has-country'] as $idcountry) {
           
                        $newDisponibility = new Disponibility();

                        $newDisponibility->setIdcountry($idcountry);
                        $newDisponibility->setIdproduct($_POST['idproduct']);

                        $this->app['disponibility.repository']->save($newDisponibility);
                    }
                }
                
                $this->app['product.repository']->save($product);
                $this->addFlashMessage('Produit enregistré');
                
                return $this->redirectRoute('admin_product');
                
            } else {
                
                $message = '<strong>Le formulaire contient des erreur</strong>';
                $message .= '<br>' .implode('</br>', $errors);
                
                $this->addFlashMessage($message, 'error');
            }
        }
        
        $countries = $this->app['country.repository']->findAll();
        
        return $this->render(
                'admin/adminProductEdit.html.twig',
                [
                    'product' => $product,
                    'countries' => $countries,
                    'disponibilities' => $disponibility
                ]
         );
    }
    
    public function deleteAction($id) {
        
        $product = $this->app['product.repository']->find($id);
        
        $product = $this->app['product.repository']->delete($product);
        $this->addFlashMessage('le product est supprimé');
        
        return $this->redirectRoute('admin_product');
    }
    
}
