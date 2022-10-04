<?php

require_once "dbbFunctions.php";

if(isset($_POST)){

$infoConnexion = $_POST;

$mail = $infoConnexion['mail'];
$password = $infoConnexion['password'];

}else{
  require 'scriptCreationDeCompte.php';
}


$users = selectFromDatabase("User_acount", "mail", $mail, $conn);

foreach($users as $user){
  var_dump($user);
  echo $user[2];
}

if($users = 1){
    require 'userData.php';
}