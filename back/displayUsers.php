<?php

require_once "dbbFunctions.php";

$users = selectAllFromDatabase("user_acount", $conn);

?>

<script> var = infoUsers "<?php echo $users ?>"; </script>
<script src = "../Javascript/redirectUsersInfo.js"></script>
<script>window.location.href = "../front/listeUtilisateurs.php";</script>
