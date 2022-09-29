<?php

require_once "dbbFunctions.php";

$user = selectFromDatabase(User, "ID", 0, $conn);

echo $user["name"];