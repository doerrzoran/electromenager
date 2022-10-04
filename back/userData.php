<?php

session_start();

echo $user[1];

$_SESSION['id'] = $user[0];
$_SESSION['name'] = $user[1];
$_SESSION['firstname'] = $user[2];
$_SESSION['mail'] = $user[3];
$_SESSION['password'] = $user[4];

echo $_SESSION['name'];


// header('Location: ../front/pageAccueil.php');