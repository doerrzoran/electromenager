<?php
require_once 'dbbFunctions.php';

if(isset($_POST)){

  $infoNewAccount = $_POST;
  
  $name = $infoNewAccount['nom'];
  $firstName = $infoNewAccount['prenom'];
  $mail = $infoConnexion['mail'];
  $password = $infoConnexion['password'];

$acounts = insertIntoDatabase('user-acount', 'name, firstname, mail, password, role', '$name, $firstName, $mail, $password, 2', $conn);

};