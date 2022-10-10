<?php

require_once "dbbFunctions.php";

if(isset($_POST)){

$infoConnexion = $_POST;

$mail = $infoConnexion['mail'];
$password = $infoConnexion['password'];

if($user == true){
  require 'userData.php';
}else{
  header('Location: ../front/connexion.html'); 
}


$user = selectFromDatabase("User_acount", "mail", $mail, $conn);

if($user === true){
  require 'userData.php';
}else{
  header('Location: ../front/connexion.html'); 
}


 