<?php
require_once 'dbbFunctions.php';

if(isset($_POST)){

  $infoNewAccount = $_POST;
  
  $name = $infoNewAccount['nom'];
  $firstName = $infoNewAccount['prenom'];
  $mail = $infoNewAccount['mail'];
  $password = $infoNewAccount['password'];
  $password2 = $infoNewAccount['password2'];

if($password == $password2){
  $acount = insertIntoDatabase("user-acount", 'name, firstname, mail, password, role', "'$name', '$firstName', '$mail', '$password', 2", $conn);
  var_dump($acount);
}else{
    die('le mot de passe ne correspond pas');
}

};