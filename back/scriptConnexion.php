<?php

require_once "dbbFunctions.php";

if(isset($_POST['mail'])){

$infoConnexion = $_POST;

$mail = $infoConnexion['mail'];
$password = $infoConnexion['password'];

}else{
  ?>
  <script>
    var mail = sessionStorage.getItem('mail');
    console.log(mail);
    var password = sessionStorage.getItem('password');
    console.log(password);
    document.cookie = 'mail = ' + mail;
    document.cookie = 'password = ' + password;
    sessionStorage.removeItem('mail');
    sessionStorage.removeItem('password');
  </script>
  <?php
  $mail = $_COOKIE['mail'];
  echo $mail;
  if (isset($_COOKIE['mail'])) {
      unset($_COOKIE['mail']); 
      setcookie('mail', null, -1, '/'); 
    };
  $password = $_COOKIE['password'];
  echo $password;
  if (isset($_COOKIE['password'])) {
    unset($_COOKIE['password']); 
    setcookie('password', null, -1, '/'); 
  };
}



 