<?php
require "models/Users/User.php";

$user = new User('3');


var_dump($user->getEmail());