<?php

class User
{
    public $role;
    protected $name;
    protected $email;

    function __construct($email, $name, $role)
    {
        $this->email = $email;
        $this->name = $name;
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
public function isAdmin(){
        if($this->getRole()==1){
            return "Admin";
        }else{
            return "user";
        }
}

}