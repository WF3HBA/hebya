<?php



namespace Entity;

class User {
    
    const ROLE_USER = 'user';
    
    const ROLE_ADMIN = 'admin';
    
    private $iduser;
    
    private $firstname;
    
    private $lastname;
    
    private $email;
    
    private $password;
    
    private $role = self::ROLE_USER;
    
    
    /***********G E T T E R**************/
    
    function getIduser() {
        return $this->iduser;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getRole() {
        return $this->role;
    }

    
    
    /***********S E T T E R**************/
    
    
    function setIduser($iduser) {
        $this->iduser = $iduser;
        
        return $this;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
        
        return $this;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
        
        return $this;
    }

    function setEmail($email) {
        $this->email = $email;
        
        return $this;
    }

    function setPassword($password) {
        $this->password = $password;
        
        return $this;
    }

    function setRole($role) {
        
        if(!in_array($role, [self::ROLE_USER, self::ROLE_ADMIN])){
            throw new \UnexpectedValueException('Unrecognized role value');
        }
        
        $this->role = $role;
        
        return $this;
    }
    
    public function getFullname(){
        return $this->firstname.' '.$this->lastname;
    }
    
   public function isAdmin() {
       return $this->role == self::ROLE_ADMIN;
   }

    
}
