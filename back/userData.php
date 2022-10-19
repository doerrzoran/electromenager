<?php

session_start();


$_SESSION['id'] = $userMail[0];
$_SESSION['name'] = $userMail[1];
$_SESSION['firstname'] = $userMail[2];
$_SESSION['mail'] = $userMail[3];
$_SESSION['password'] = $userMail[4];
$_SESSION['role'] = $userMail[5];

header('Location: ../front/pageAccueil.php');