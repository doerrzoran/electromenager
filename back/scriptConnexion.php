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

var_dump($user);

// if($user == 1){
//   require 'userData.php';
// }else{
//   header('Location: ../front/connexion.html'); 
// }
 



