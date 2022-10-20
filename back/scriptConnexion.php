<?php

require_once "dbbFunctions.php";

if(isset($_POST)){

$infoConnexion = $_POST;

$mail = $infoConnexion['mail'];
$password = $infoConnexion['password'];

}else{
  ?>
  <script>
    var mail = sessionStorage.getItem('mail');
    var password = sessionStorage.getItem('password');
    sessionStorage.removeItem('mail');
    sessionStorage.removeItem('password');
  </script>
  <?php
  $mail = "<script>document.write(mail)</script>";
  $password = "<script>document.write(password)</script>" ;
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
 


 