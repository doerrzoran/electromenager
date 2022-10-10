<?php

require_once "dbbFunctions.php";

if(isset($_POST)){

$infoConnexion = $_POST;

$mail = $infoConnexion['mail'];
$password = $infoConnexion['password'];

}else{
  require 'scriptCreationDeCompte.php';
}


$userMail = selectFromDatabase("User_acount", "mail", $mail, $conn);
$userPassword = selectFromDatabase("User_acount", "password", $password, $conn);


if(($userMail == true) && ($userPassword == true)){
  require 'userData.php';
}else{
  ?><script>var test='mail invalide'; 
  alert(test);
  window.location.href = "../front/connexion.html";
  </script> <?php
}
 


 