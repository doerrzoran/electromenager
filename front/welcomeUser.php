<?php
require_once '../back/userId.php';

// echo $userName;

function welcomeUser($userName, $userFirstname){
    if(!$userName){
        echo "connecté en temps que ".$userName." ".$userFirstname;
    }
}