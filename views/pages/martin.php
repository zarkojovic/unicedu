<?php

use Martin\Student;
use Martin\Agent;

include "../../models/Users/Martin/class.user.php";
    include "../../models/Users/Martin/class.student.php";
    include "../../models/Users/Martin/class.agent.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $student = new Student("Mitar","Miric","mitarmiric@gmail.com","sifra1");
        $student->printUser();
        $agent = new Agent("Mitar","Miric","mitarmiric@gmail.com","sifra1");
        $agent->printUser();
    ?>
</body>
</html>
