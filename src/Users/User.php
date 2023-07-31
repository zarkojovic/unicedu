<?php

require "config/connection.php";

class User
{
    private $con_id;
    private $email;

    public function __construct($id)
    {
        global $conn;
        $data = $conn->select('contacts', [
            'contact_id',
            'email'
        ], ["user_id" => $id]);

        $this->setConId($data[0]["contact_id"]);
        $this->setEmail($data[0]["email"]);

    }

    public function setConId($id){
        $this->con_id = $id;
    }
    public function getConId(){
        return $this->con_id;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }

}