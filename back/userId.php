<?php

session_start();

if(isset($_SESSION['id'])){
    $userID = $_SESSION['id'];
    $userName = $_SESSION['name'];
    $userFirstname = $_SESSION['firstname'];
    $userMail = $_SESSION['mail'];
    $userPassword = $_SESSION['password'];
    $userRole = $_SESSION['role'];

    ?>
    <script>
        var role = "<?php echo $userRole ?>";
        sessionStorage.setItem('Role', role);
    </script>

    <?php
   
}


