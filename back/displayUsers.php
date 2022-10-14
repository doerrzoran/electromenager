<?php

require_once "dbbFunctions.php";

$users = selectAllFromDatabase("user_acount", $conn);
echo $users;
?>

<script> var infoUsers = "<?php echo $users ?>";
document.writeln(infoUsers);</script>
<script src = "../Javascript/redirectUsersInfo.js"></script>
<script>window.location.href = "../front/listeUtilisateurs.php";</script>
