<?php

class Users {
    //class private members/attrubutes
    private $id;
    private $name;
    private $lastname;
    private $username;
    private $password;

    //default constructor
    public function __construct(){}

    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setLastname($lastname){
        $this->lastname = $lastname;
    }
    public function setUsername($username){
        $this->username = $username;
    }
    public function setPassword($password){
        $this->password = $password;
    }

    //getters
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
}



?>