<?php
require_once "config/connection.php";
class User
{
    private $con_id;
    private $email;
    private $password;

    public static function getUser($id){
        global $conn;
        $data = $conn->select('contacts', [
            'contact_id',
            'email'
        ], ["user_id" => $id]);
        $user = new self();

        $user->email = $data[0]["email"];
        $user->con_id = $data[0]["contact_id"];
//        if($data->error){
//            throw new ErrorException($conn->error);
//        }else{
//            return $user;
//        }
    }

    public static function addUser($email, $password, $con_id){
        $user = new self();
        $user->con_id = $con_id;
        $user->email = $email;
        $user->password = $password;
        global $conn;
        $conn->insert('contacts',[
            "email"=>$user->email,
            "password"=>$user->password,
            "contact_id"=>$user->con_id,
        ]);
        if($conn->error){
            throw new ErrorException($conn->error);
        }else{
            return $user;
        }
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