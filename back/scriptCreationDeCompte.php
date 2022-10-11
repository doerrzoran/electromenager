<?php
require_once 'dbbFunctions.php';

if(isset($_POST)){

  $infoNewAccount = $_POST;
  // var_dump($infoNewAccount);
  $name = $infoNewAccount['nom'];
  $firstName = $infoNewAccount['prenom'];
  $mail = $infoNewAccount['mail'];
  $password = $infoNewAccount['password'];
  $password2 = $infoNewAccount['password2'];

  if($password === $password2){
    $verification =  selectFromDatabase('User_acount', 'mail', $mail, $conn);
    if($verification == false){
      $acount = insertIntoDatabase('User_acount', 'name, firstname, mail, password, role', "'$name', '$firstName', '$mail', '$password', 2", $conn);
    }else{
      ?><script>var messsage='un compte existe deja pour cet adresse mail !'; 
    alert(messsage);
    window.location.href = "../front/creationDeCompte.html";
    </script> <?php
    }; 
  }else{
      die('le mot de passe ne correspond pas');
  };

};