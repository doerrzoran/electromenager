<?php

$infobdd = $_POST;


$dbhost = $infobdd["Host"];

$dbname = $infobdd["Database"];
echo $dbname." ";
$dbuser = $infobdd["User"];
echo $dbuser." ";
$dbport = $infobdd["Port"];
echo $dbport." ";
$dbpassword = $infobdd["Password"];
echo $dbpassword." ";


$conn = pg_connect('host=".$dbhost." dbname=".$dbname." user=".$dbuser." port=".$dbport." password=".$dbpassword.');

if(!$conn){
    die('Connection error: '). pg_connect_error();
}else{
    echo 'connexion reussie !';
}