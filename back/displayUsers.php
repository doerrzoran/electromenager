<?php

require_once "dbbFunctions.php";

$users = selectAllFromDatabase("user_acount", $conn);

foreach($users as $user){
    var_dump($user).'</br>';
}

