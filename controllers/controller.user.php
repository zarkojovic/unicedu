<?php

namespace Martin;

class UserController extends Controller
{
    #PROPERTIES
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;

    #CONSTRUCTOR
    public function __construct($firstName,$lastName,$email, $password) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

    #METHODS
    public function validateInput(): bool{
        //validate
        if ($this->firstName && $this->lastName && $this->email && $this->password) {
            return true;
        }

        return false;
    }
}