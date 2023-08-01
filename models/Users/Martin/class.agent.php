<?php

namespace Martin;
//require_once "config/connection.php";

class Agent extends User
{
    public function printUser()
    {
        echo "My name is " . $this->firstName . ' ' . $this->lastName . " and I'm an agent.";
    }
}