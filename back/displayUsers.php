<?php

require_once "dbbFunctions.php";

$users = selectAllFromDatabase("user_acount", $conn);

foreach($users as $user){
    ?>
        <script>
        var arr = <?php echo json_encode($user); ?>;
        </script>
    <?php
}

?>

<script src="../Javascript/redirectUsersInfo.js"></script>
<script> window.location.href = "../front/listeUtilisateurs.php" </script>