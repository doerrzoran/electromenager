<?php

require_once "dbbFunctions.php";

$users = selectAllFromDatabase("user_acount", $conn);

echo $users[1];

foreach($users as $user){
    echo $user['name', 'firstname',  'mail', 'password'].'</br>';
}

