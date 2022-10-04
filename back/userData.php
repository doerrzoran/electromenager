<?php

session_start();

$_SESSION['id'] = $user[0];
$_SESSION['name'] = $user[1];
$_SESSION['firstname'] = $user[2];
$_SESSION['mail'] = $user[3];
$_SESSION['password'] = $user[4];




header('Location: ../front/pageAccueil.php');