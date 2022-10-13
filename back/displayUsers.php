<?php

require_once "dbbFunctions.php";

$users = selectAllFromDatabase("user_acount", $conn);

var_dump($users);