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

function checkResult($a){
  if($a != 1){
      throw new Exception('resulta introuvable !');
  };
};


try{
  $user = checkResult($user);
}catch(Exception $e){
  ?><script>var test='<?php echo $e->getMessage(); ?>'; alert(test);</script> <?php
}finally{
  require 'userData.php';
}


// if($user != 1){
//   header('Location: ../front/pageAccueil.php'); 
// }
//   require 'userData.php';

