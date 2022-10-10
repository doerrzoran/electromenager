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
$userMPassword = selectFromDatabase("User_acount", "password", $password, $conn);

var_dump($userMail);
var_dump($userMPassword);


if($userMail || $userMPassword == false){
  ?><script>var test='mail invalide'; 
  alert(test);
  window.location.href = "../front/connexion.html";
  </script> <?php
}else{
  require 'userData.php';
}
 


 