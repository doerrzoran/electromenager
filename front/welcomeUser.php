<?php

require_once '..\back\userId.php';

function welcomeUser(){
    if(!$userId){
        echo "connecté en temps que ".$userName." ".$userFirstname;
    }
}

