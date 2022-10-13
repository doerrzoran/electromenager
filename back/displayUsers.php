<?php

require_once "dbbFunctions.php";

$users = selectAllFromDatabase("user_acount", $conn);

foreach($users as $user){
    echo $user['name'].'</br>';
    echo $user['firstname'].'</br>';
    echo $user['mail'].'</br>';
    echo $user['password'].'</br>';
}

