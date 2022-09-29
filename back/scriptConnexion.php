<?php

require_once "dbbFunctions.php";

$user = selectFromDatabase("User", "name", "Doerr", $conn);

var_dump($user);