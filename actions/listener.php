<?php
use Martin\UserController;
use Martin\Student;


if (!empty($type)) {
    switch ($type){
        case "register" :
            $user = new UserController("Pera","Peric",$_POST["email"],$_POST["password"]);
            $result = $user->validateInput();
            if ($result) {
                //proceed to model
                $student = new Student("Pera","Peric",$_POST["email"],$_POST["password"]);
                $student->register();
            }


//            $email = $_POST["email"];
//            $password = $_POST["password"];
//            echo "Email : $email and password : $password";
            die();
            break;
    }
}