<?php
require_once '../back/userId.php'; 

function welcomeUser($userName, $userFirstname){
    echo "connecté en temps que ".$userName." ".$userFirstname;
}