<?php

require_once "dbbFunctions.php";

$users = selectAllFromDatabase("user_acount", $conn);
var_dump($users);
echo 'STOP';
$user = $users[1];
var_dump($user);
echo 'STOP';
?>

<!-- <script>
var arr = <?php echo json_encode($user); ?>;
</script>
<script src="../Javascript/redirectUsersInfo.js"></script>
<script> window.location.href = "../front/listeUtilisateurs.php" </script> -->