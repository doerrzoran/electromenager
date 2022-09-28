<?php

$infobdd = $_POST;


$dbhost = $infobdd["Host"];

$dbname = $infobdd["Database"];
echo $dbname;
$dbuser = $infobdd["User"];
echo $dbuser;
$dbport = $infobdd["Port"];
echo $dbport;
$dbpassword = $infobdd["Password"];
echo $dbpassword;

$pgconnect = "host=$dbhost dbname=$dbname user=$dbuser port=$dbport password=$dbpassword";

$conn = pg_connect($pgconnect);

if(!$conn){
    die('Connection error: '). pg_connect_error();
}else{
    echo 'connexion reussie !';
}