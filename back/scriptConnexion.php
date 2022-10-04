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
echo $users;
var_dump($users);
foreach($users as $user){
  // print_r($user).'</br>';
  echo $user;
}

if($users = 1){
    require 'userData.php';
}