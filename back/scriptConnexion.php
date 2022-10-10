<?php

require_once "dbbFunctions.php";

if(isset($_POST)){

$infoConnexion = $_POST;

$mail = $infoConnexion['mail'];
$password = $infoConnexion['password'];

}else{
  require 'scriptCreationDeCompte.php';
}


$user = selectFromDatabaseAnd("User_acount", "mail", "password" $mail, $password, $conn);


if($user == true){
  require 'userData.php';
}else{
  ?><script>var test='mail invalide'; 
  alert(test);
  window.location.href = "../front/connexion.html";
  </script> <?php
}
 


 