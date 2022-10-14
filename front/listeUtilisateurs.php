<script>var data = sessionStorage.getItem('userInfo');
document.writeln(data);</script>

<?php
   $users = '<script>document.writeln(data);</script>';
  var_dump($users);
foreach($users as $user){
    var_dump($user);
    echo $user['name'].'-';
    echo $user['firstname'].'-';
    echo $user['mail'].'-';
    echo $user['password'].'-';
}

?> 