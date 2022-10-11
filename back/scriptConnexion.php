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


if($userMail == false || $userMPassword == false){
  ?>
  <script>var message='identifiants invalides';</script>
  <script src='../Javascript/redirectConnexion.js' ></script>
  <script>window.location.href = "../front/connexion.html";</script>
   <?php
}else{
  require 'userData.php';
}
 


 