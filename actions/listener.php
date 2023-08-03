<?php

if (!empty($type)) {
    switch ($type){
        case "register" :
            $email = $_POST["email"];
            $password = $_POST["password"];
            echo "Email : $email and password : $password";
            die();
            break;
    }
}