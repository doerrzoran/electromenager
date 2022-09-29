<?php

require_once "dbbFunctions.php";

$user = selectFromDatabase("User", "id", 0, $conn);

echo $user["name"];