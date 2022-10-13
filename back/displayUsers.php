<?php

require_once "dbbFunctions.php";

$users = selectAllFromDatabase("user_acount", $conn);

foreach($users as $user){
    foreach($user as $atributes){
        echo $atributes.'</br>';
    };
    
}

