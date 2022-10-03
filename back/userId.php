<?php
echo '0</br>';

session_start();
echo '0.1</br>';
if(isset($_SESSION['id'])){
    $userID = $_SESSION['id'];
    $userName = $_SESSION['name'];
    $userFirstname = $_SESSION['firstname'];
    $userMail = $_SESSION['mail'];
    $userPassword = $_SESSION['password'];
}

echo '1</br>';