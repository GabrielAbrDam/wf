<?php 

namespace Model;

class User 
{
    
    private $id;
    protected $roles = [];
    protected $password;
    protected $salt;
    protected $username;

    public function getId(){
        return $this->id;
    }
    
    public function getRoles(){
        
        return $this->roles;
    }
    
    public function getPassword(){
        
        return $this->password;
    }
    
    public function getSalt(){
    
        return $this->salt;
    }
    
    public function getUsername(){
        
        return $this->username;
    }
    
    
    
    
    public function setRoles($roles){
        $this->roles = $roles;
        
        return $this;
    }
    
    public function setpassword($password){
        $this->password = $password;
        return $this;
    }
    
    public function setSalt($salt){
        $this->salt = $salt;
        return $this;
    }
    
    public function setUsername($username){
        $this->username = $username;
                return $this;
    }
    
    public function eraseCredentials(){
        $this->salt = null;
        $this->password = null;
        return $this;
    }
       
}



