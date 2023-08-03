<?php

namespace Martin;

abstract class User
{
    #PROPERTIES
    protected int $id;
    protected string $firstName;
    protected string $lastName;
    protected string $email;
    protected string $password;

    #CONSTRUCTOR
    public function __construct($firstName, $lastName, $email, $password){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

    #METHODS
    public abstract function printUser();
    abstract public function register();
    abstract public function login();

}