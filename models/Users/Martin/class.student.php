<?php

namespace Martin;
require_once "config/connection.php";

class Student extends User
{
    public function printUser()
    {
        echo "My name is " . $this->firstName . ' ' . $this->lastName . " and I'm a student.";
    }
}