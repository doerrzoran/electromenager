<?php
require_once '../back/userId.php'; 

echo $username;

function welcomeUser($userName, $userFirstname){
  if(!$userName){
     echo '<div class="text-danger" style="text-align: right; background-color: #FFFACD; border-radius: 15px; margin-left: 1600px;">
     <div class="event" id="creationDeCompte" style="cursor:pointer; font-size: 30px; padding-bottom: 10px;">creer un compte</div>
     <div class="event" id="connexion" style="cursor:pointer; font-size: 30px; padding-bottom: 10px;">se connecter</div>
   </div>';
     ?><script>sessionStorage.removeItem('Role');</script><?php
  }else{
     echo "<div><h3 style ='font-size: 30px;'>connecté en temps que ".$userFirstname." ".$userName."</h3><p id='deconnexion'>se deconnecter</p></div>";
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

