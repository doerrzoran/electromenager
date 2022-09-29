<?php

require_once "dbbFunctions.php";

$user = selectFromDatabase("User_acount", "name", "Doerr", $conn);

if($user = 1){
    var_dump($user);
}