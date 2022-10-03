<?php
if(isset($userId)){
require_once '..\back\userId.php';
}

function welcomeUser(){
    if(isset($userId)){
        echo "connecté en temps que ".$userName." ".$userFirstname;
    }
}

