<?php

require_once "dbbFunctions.php";

$user = selectFromDatabase("User", "name", "Doerr", $conn);

if($user = 1){
    echo 'oui';
}