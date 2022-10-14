<?php

require_once "dbbFunctions.php";

$users = selectAllFromDatabase("user_acount", $conn);
echo $users;
?>

<script> var infoUsers = "<?php echo $users ?>";
document.writeln(infoUsers);</script>

