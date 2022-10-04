<?php
require_once '../back/userId.php'; 

echo $username;

function welcomeUser($userName, $userFirstname){
  if(!$userName){
     echo "connecté en temps que ".$userName." ".$userFirstname;
  }else{
     echo '';
  } 
}
