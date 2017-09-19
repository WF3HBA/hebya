<?php



namespace Service;

use Entity\Client;

use Symfony\Component\HttpFoundation\Session\Session;

class ClientManager {
    
    /**
     *
     * @var session
     */
    private $session;
    
    public function __construct(Session $session) {
        
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
    
    public function Login(Client $client){
        $this->session->set('client', $client);
    }
    
    public function Logout(){
        $this->session->remove('client');
    }
    
    /**
     * 
     * @return Client|null
     */
    public function getClient(){
        return $this->session->get('client');
    }
    
   /**
    * 
    * @return string
    */
    public function getClientName() {
        if($this->session->has('client')){
            return $this->getClient()->getFullName();
        }
    }
}  