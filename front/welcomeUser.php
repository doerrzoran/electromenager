<?php

echo '2</br>';

require_once '..\back\userId.php';

echo '3</br>';

function welcomeUser(){
    if(isset($userId)){
        echo "connecté en temps que ".$userName." ".$userFirstname;
    }
}

echo '4</br>';