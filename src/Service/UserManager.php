<?php



namespace Service;

use Entity\User;
use Symfony\Component\HttpFoundation\Session\Session;




class UserManager {
    
    private $session;
    
    public function __construct(Session $session){
        $this->session = $session;
    }
    
      /**
     * 
     * @param type $plainPassword
     * @return string
     */
    public function encodePassword($plainPassword) {
        
        return password_hash($plainPassword, PASSWORD_BCRYPT);
    }
    
    /**
     * 
     * @param type $plainPassword
     * @param type $encodedPassword
     * @return bool
     */
    public function verifyPassword($plainPassword, $encodedPassword) {
        
        return password_verify($plainPassword, $encodedPassword);
    }
    
    public function Login(User $user){
        $this->session->set('user', $user);
    }
    
    public function Logout(){
        $this->session->remove('user');
    }
    
    /**
     * 
     * @return User|null
     */
    public function getUser(){
        return $this->session->get('user');
    }
    
   /**
    * 
    * @return string
    */
    public function getUserName() {
        if($this->session->has('user')){
            return $this->getUser()->getFullName();
        }
    }
    
    public function isAdmin(){
        return $this->session->has('user') && $this->getUser()->isAdmin();
    }
}
