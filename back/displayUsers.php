<?php

require_once "dbbFunctions.php";

$users = selectAllFromDatabase("user_acount", $conn);

foreach($users as $user){
  $user['name'].'-';
  $user['firstname'].'-';
  $user['mail'].'-';
  $user['password'].'-';
}

