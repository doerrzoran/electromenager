<?php
$infobdd = $_POST;

var_dump($infobdd);

$conn = pg_connect("host=$dbhost dbname=$dbname user=$dbuser port=$dbport password=$dbpassword");