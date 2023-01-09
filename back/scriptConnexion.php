<?php

require_once "dbbFunctions.php";

if(isset($_POST['mail'])){

$infoConnexion = $_POST;

$mail = $infoConnexion['mail'];
$password = $infoConnexion['password'];

}else{
  $mail = $_COOKIE['mail'];
  echo $mail;
  $password = $_COOKIE['password'];
  echo $password;
}


$userMail = selectFromDatabase("User_acount", "mail", $mail, $conn);
$userMPassword = selectFromDatabase("User_acount", "password", $password, $conn);


if($userMail == false || $userMPassword == false){
  ?>
  <script>var message ='identifiants invalides';</script>
  <script src='../Javascript/redirectConnexion.js' ></script>
  <script>window.location.href = "../front/connexion.php";</script>
   <?php
}else{
  require 'userData.php';
}
 