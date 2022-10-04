<?php
require_once '../back/userId.php'; 
if(!$userId){
    function welcomeUser($userName, $userFirstname){
    echo "connecté en temps que ".$userName." ".$userFirstname;
  }
}


?>

<h3><?php welcomeUser($userName, $userFirstname); ?></h3>