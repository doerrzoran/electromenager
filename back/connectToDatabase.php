<?php

$dbhost = "ec2-18-209-78-11.compute-1.amazonaws.com";
$dbname = "d2kdl93b5pjda";
$dbuser = "osfvxyrzqmyqvx";
$dbport = "5432";
$dbpassword = "eff02eb83a59b0ff2eb481b4435da7b1db14b23a5ea55dbe8f943b2c86692814";


$conn = pg_connect("host=".$dbhost." dbname=".$dbname." user=".$dbuser." port=".$dbport." password=".$dbpassword."");
