<?php


namespace Controller;

use Entity\User;


class UserController extends ControllerAbstract {
    
    public function regiterAction(){
        $user = new User();
        $errors = [];
        
        if(!empty($_POST)){
            $this->SanitizePost();
            
            $user
                 ->setLastname($_POST['lastname'])
                 ->setFirsttname($_POST['firstname'])
                 ->setEmail($_POST['email'])
                 ->setPassword($_POST['password'])
//                 ->setRole($_POST['role'])
            ;
            
            if(empty($_POST['email'])){
                $errors['email'] = 'email require';
            }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'email non valide';
            }elseif(!is_null($this->app['user.repository']->findByEmail($_POST['email']))){
                $errors['email'] = ' mail already in db';
            }
            
            if(empty($errors)){
                $user->setPassword($this->app['user.manager']->encodePassword($_POST['password']));
                $this->app['user.repository']->save($user);
                
                return $this->redirectRoute('homepage');
            }else {
                $message = 'errors form';
                $message .= '<br>'.implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render('register/register.html.twig',
                [
                    'user' => $user,
                ]
           );
    }
    
    public function loginAction(){
        
        $email = '';
        
        if(!empty($_POST)){
            $this->sanitizePost();
            
            $email = $_POST['email'];
            
            $user = $this->app['user.repository']->findByEmail($email);
            var_dump($user);
            if(!is_null($user)){
                
                $this->app['user.manager']->login($user);
                    
                    return $this->redirectRoute('homepage');
                if($this->app['user.manager']->verifyPassword($_POST['password'], $user->getPassword())){
                    $this->app['user.manager']->login($user);
                    
                    return $this->redirectRoute('homepage');
                }
            }
            echo 'login not allowed';
            $this->addFlashMessage('Identification not correct', 'error');
        }
        
        return $this->render(
                'register/login.html.twig',
                [
                    'email' => $email
                ]
        );
    }
    
    public function logoutAction(){
        $this->app['user.manager']->logout();
        
        return $this->redirectRoute('homepage');
    }
}
