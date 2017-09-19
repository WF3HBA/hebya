<?php






namespace Repository;

use Entity\User;
use Repository\RepositoryAbstract;


class UserRepository extends RepositoryAbstract {
    
     public function findAll(){
    
        $query = <<<SQL
                
        SELECT *    
        FROM user
        ORDER by iduser

SQL;
       
            $dbUsers = $this->db->fetchAll($query);
            $users = [];
            
            foreach ($dbUsers as $dbUser){
                $users[] = $this->buildEntity($dbUser);
            }
            
            return $users;
    }
    
    public function findByEmail($email){
        $dbUser = $this->db->fetchAssoc(
                'SELECT * FROM user WHERE email = :email',
                [
                    ':email' =>$email
                ]
        );
        
        if(!empty($dbUser)){
            return $this->buildEntity($dbUser);
        }
    }
    
    
    public function buildEntity(array $data){
        $user = new User();
        
        $user
             ->setIduser($data['iduser'])
             ->setLastname($data['lastname'])
             ->setFirstname($data['firstname'])
             ->setEmail($data['email'])
             ->setPassword($data['password'])
             ->setRole($data['role'])
        ;
        
        return $user;
    }
    
    public function save(User $user){
        $data =[
            'lastname'=>$user->getLastname(),
            'firstname'=>$user->getFirsttname(),
            'email'=>$user->getEmail(),
            'role'=>$user->getRole()
        ];
        
        if($user->getIduser()){
            $this->db->update('user', $data,
                    [
                        'iduser'=>$user->getIduser()
                    ]
                );
        } else{
            $this->db_>insert('user', $data);
            $user->setIduser($this->bd->lastInsertId());
        }
    }
            
}
