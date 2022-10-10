<?php

require_once "dbbFunctions.php";

if(isset($_POST)){

$infoConnexion = $_POST;

$mail = $infoConnexion['mail'];
$password = $infoConnexion['password'];

}else{
  require 'scriptCreationDeCompte.php';
}


$user = selectFromDatabase("User_acount", "mail", $mail, $conn);


if($user == true){
  require 'userData.php';
}else{
  ?><script>var test='mail invalide'; 
  window.location.href = "../front/connexion.html";
  </script> <?php
}
 


 