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

if($user != 1){
  ?><script>window.location.href = "../front/connexion.html";
  var message ='resulta introuvable !';
  alert(message);
  </script> <?php
}else{
  require 'userData.php';
}


