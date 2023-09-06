<?php
class UsersDAO extends Users {
    //class members attributes
    private $table_name = "users";
    private $db_conn = null;

    //constructor
    public function __construct($DB){
        $this->db_conn=$DB;
    }

    //methods CRUD
    //Getters
    public function insertUsers(){
        
    }

}


?>