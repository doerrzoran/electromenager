<?php 
require_once "header.php"; 
require_once "welcomeUser.php";
welcomeUser($userName, $userFirstname);

?>

<html>
  <body>
    <script>
     var data = sessionStorage.getItem('Cle');
     var newArr = JSON.parse(data);
     console.log(newArr);
    function tab(newArr){
      for(let i = 0; i < newArr.length; i++){
        arr = newArr[i];
        document.write(arr['date'] + ' ' + arr['price'] + '€ ' + ' ' + '<br>');
      };
    }
    </script>
    <?php  
    $variable = "<script>tab(newArr);</script>";
    echo $variable;
    ?> 
  </body>
  <?php
      require_once "footer.html"; 
    ?>
  <script src ="../Javascript/redirect.js"></script>
</html>