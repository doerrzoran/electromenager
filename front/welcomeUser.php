<?php
require_once '../back/userId.php'; 

echo $username;

function welcomeUser($userName, $userFirstname){
  if(!$userName){
     echo '';
     ?><script>sessionStorage.removeItem('Role');</script><?php
  }else{
     echo "<div style = 'padding-bottom: 20px;'><h3 style ='font-size: 18px;'>connecté en temps que ".$userName." ".$userFirstname."</h3><p id='deconnexion'>se deconnecter</p></div>";
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

