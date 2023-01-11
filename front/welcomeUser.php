<?php
require_once '../back/userId.php'; 

echo $username;

function welcomeUser($userName, $userFirstname){
  if(!$userName){
     echo '';
     ?><script>sessionStorage.removeItem('Role');</script><?php
  }else{
     echo "<div><h3 style ='font-size: 20px;'>connecté en temps que ".$userFirstname." ".$userName."</h3><p id='deconnexion' style ='cursor: pointer;'>se deconnecter</p></div>";
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

