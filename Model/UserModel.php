<?php

class UserModel
{
    private $userId;
    private $name;
    private $password;
    //private $race;

    function __construct($name = NULL, $password = NULL) {
        $this->name = $name;
        $this->password = $password;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

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

    function addUser() {
        $name = $this->name;
        $password = $this->password;
        $query = "INSERT INTO users (UserNAME, UserPASS) VALUES ('$name','$password')";
        execQuery($query);
    }

    function getUser() {
        $name = $this->name;
        $query = "SELECT * FROM users WHERE UserNAME = '$name'";
        if ($user = mysqli_fetch_assoc(execQuery($query))) {
            $this->userId = $user['UserID'];
            $this->password = $user['UserPASS'];
            return TRUE;
        }
        else return FALSE;
    }
}

