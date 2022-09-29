<?php

require_once "dbbFunctions.php";

$users = selectFromDatabase("User_acount", "name", "Doerr", $conn);

if($user = 1){
    foreach($users as $user){
        var_dump($user);
    }
}