<?php

require_once "dbbFunctions.php";

$users = selectAllFromDatabase("user_acount", $conn);

foreach($users as $user){
    echo $user['name'].'</br>;
}

