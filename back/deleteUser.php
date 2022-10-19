<?php

require_once 'dbbFunctions.php';

$id = $_POST['id'];

$deletion = deleteFromDatabase("user_acount", "id", $id, $conn);

header("Location: displayUsers.php");