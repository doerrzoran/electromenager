<?php

$infobdd = $_POST;


$dbhost = $infobdd["Host"];
$dbname = $infobdd["Database"];
$dbuser = $infobdd["User"];
$dbport = $infobdd["Port"];
$dbpassword = $infobdd["Password"];


$conn = pg_connect("host=".$dbhost." dbname=".$dbname." user=".$dbuser." port=".$dbport." password=".$dbpassword."");

if(!$conn){
    die('Connection error: '). pg_connect_error();
}else{
    echo 'connexion reussie !';
}