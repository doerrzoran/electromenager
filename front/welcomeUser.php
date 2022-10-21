<?php
require_once '../back/userId.php'; 

echo $username;

function welcomeUser($userName, $userFirstname){
  if(!$userName){
     echo '';
     ?><script>sessionStorage.removeItem('Role');</script><?php
  }else{
     echo "<h3>connecté en temps que ".$userName." ".$userFirstname."</h3>";
     echo "<p id='deconnexion'>se deconnecter</p>";
     ?>
         <script>
            var disconnect = document.getElementById('deconnexion').onclick = function(){
               window.location.href = "../back/sessionDestroy.php";
            }
         </script>
     <?php
  } 
}

?>

<script src ="../Javascript/redirect.js"></script>
