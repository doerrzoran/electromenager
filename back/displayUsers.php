<?php

require_once "dbbFunctions.php";

$users = selectAllFromDatabase("user_acount", $conn);

?>

<script src = "../Javascript/redirectUsersInfo.js"></script>
