<script>var data = sessionStorage.getItem('userInfo');
document.writeln(data);</script>

<?php
   $users = '<script>document.writeln(data);</script>';
echo $users;
foreach($users as $user){
    echo $user['name'].'-';
    echo $user['firstname'].'-';
    echo $user['mail'].'-';
    echo $user['password'].'-';
}

?> -->