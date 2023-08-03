<?php

namespace Martin;
//require_once "config/connection.php";

class Agent extends User
{
    #METHODS
    public function printUser()
    {
        echo "My name is " . $this->firstName . ' ' . $this->lastName . " and I'm an agent.";
    }

    public function register()
    {
        // TODO: insert this users fields to database, start session and redirect
    }

    public function login()
    {
        // TODO: start session and redirect
    }
}