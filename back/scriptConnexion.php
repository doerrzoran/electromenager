<?php

require_once "dbbFunctions.php";

$infoConnexion = $_POST

$mail = $infoConnexion['mail'];
$password = $infoConnexion['password'];

$users = selectFromDatabase("User_acount", "mail", $mail, $conn);

if($users = 1){
    session_start();
    foreach($users as $user){
        $_SESSION['id'] = $user['id'];
    }
}