<?php

require_once "dbbFunctions.php";

$users = selectAllFromDatabase("user_acount", $conn);

print_r($users);
foreach($users as $user){
    print_r($user);
    echo $user['name'].'-';
    echo $user['firstname'].'-';
    echo $user['mail'].'-';
    echo $user['password'].'-';
}
?>

<script> var infoUsers = "<?php echo $users ?>";
document.writeln(infoUsers);</script>
<script src = "../Javascript/redirectUsersInfo.js"></script>
<!-- <script>window.location.href = "../front/listeUtilisateurs.php";</script> -->
