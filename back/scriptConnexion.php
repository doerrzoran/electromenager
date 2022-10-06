<?php

require_once "dbbFunctions.php";

if(isset($_POST)){

$infoConnexion = $_POST;

$mail = $infoConnexion['mail'];
$password = $infoConnexion['password'];

}else{
  require 'scriptCreationDeCompte.php';
}

echo 'voila';

$user = selectFromDatabase("User_acount", "mail", $mail, $conn);

echo $user.' STOP ';
var_dump($user)' STOP ';
print_r($user)' STOP ';

// if($user == 1){
//   require 'userData.php';
// }else{
//   header('Location: ../front/connexion.html'); 
// }
 



