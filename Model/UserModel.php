<?php
namespace Model;

class UserModel
{
    private $name;
    private $password;

    function __construct($name = NULL, $password = NULL) {
        $this->name = $name;
        $this->password = $password;
    }

    //private $race;

    function setName($name){
        $this->name = $name;
    }

    function setPassword($password){
        $this->password = $password;
    }

    function getName(){
        return $this->name;
    }

    function getPassword(){
        return $this->password;
    }  
}

