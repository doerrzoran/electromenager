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
  ?><script>var message ='<?php echo $e->getMessage(); ?>';
  alert(message);
  window.location.href = "..\front\connexion.html";</script> <?php
}finally{
  // require 'userData.php';
}

