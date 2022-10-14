<script>var data = sessionStorage.getItem('userInfo');</script>

<?php
   $users = '<script>document.writeln(data);</script>';

foreach($users as $user){
    echo $user['name'].'-';
    echo $user['firstname'].'-';
    echo $user['mail'].'-';
    echo $user['password'].'-';
}

?>