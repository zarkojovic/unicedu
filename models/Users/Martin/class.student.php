<?php

namespace Martin;
//require_once "config/connection.php";

class Student extends User
{

    #METHODS
    public function printUser()
    {
        echo "My name is " . $this->firstName . ' ' . $this->lastName . " and I'm a student.";
    }

    public function register()
    {
        // TODO: insert this users fields to database, start session and redirect
        echo "to insert into database: ";
    }

    public function login()
    {
        // TODO: start session and redirect
    }
}