<?php

echo $users;
session_start();
    foreach($users as $user){
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['mail'] = $user['mail'];
        $_SESSION['password'] = $user['password'];
    } 



// header('Location: ../front/pageAccueil.php');