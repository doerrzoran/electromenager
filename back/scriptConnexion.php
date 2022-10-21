<?php

require_once "dbbFunctions.php";

if(isset($_POST)){

$infoConnexion = $_POST;

$mail = $infoConnexion['mail'];
$password = $infoConnexion['password'];

}else{
  echo 'test';
  ?>
  <script>
    var mail = sessionStorage.getItem('mail');
    var password = sessionStorage.getItem('password');
    console.log(mail);
    document.cookie = 'mail = ' + mail;
    document.cookie = 'password = ' + password;
    // sessionStorage.removeItem('mail');
    // sessionStorage.removeItem('password');
  </script>
  <?php
  $mail = $_COOKIE['mail'];
  $password = $_COOKIE['password'];
}

echo $mail.'</br>';
echo $password.'</br>';


 