<?php
require_once 'dbbFunctions.php';

 $name = $_POST['nom'];
 $firstName = $_POST['prenom'];
 $mail = $_POST['mail'];
 $password = $_POST['password'];
 $password2 = $_POST['password2'];

 $acount = insertIntoDatabase('User_acount', 'name, firstname, mail, password, role', "'$name', '$firstName', '$mail', '$password', 1", $conn);    
    
header('Location: ../front/listeUtilisateurs.php'); 