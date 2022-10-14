<?php

require_once "dbbFunctions.php";

$users = selectAllFromDatabase("user_acount", $conn);


foreach($users as $user){
    print_r($user);

}
?>

<script> var infoUsers = "<?php json_encode($users) ?>";</script>
<script src = "../Javascript/redirectUsersInfo.js"></script>
<!-- <script>window.location.href = "../front/listeUtilisateurs.php";</script> -->

<script>var data = sessionStorage.getItem('userInfo');</script>

<?php
   $users = '<script>document.write(data);</script>';
   
foreach($users as $user){
    print_r($user);

}

?> 