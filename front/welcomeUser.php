<?php
require_once '../back/userId.php'; 

echo $username;

function welcomeUser($userName, $userFirstname){
  if(!$userName){
     echo '';
  }else{
     echo "connecté en temps que ".$userName." ".$userFirstname;
  } 
}

?>

<script src ="../Javascript/redirect.js"></script>
