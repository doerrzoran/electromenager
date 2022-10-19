<?php
require_once '../back/userId.php'; 

echo $username;

function welcomeUser($userName, $userFirstname){
  if(!$userName){
     echo '';
  }else{
     echo "<h3>connecté en temps que ".$userName." ".$userFirstname."</h3>";
     echo "<p>se deconnecter</p>";
  } 
}

?>

<script src ="../Javascript/redirect.js"></script>
