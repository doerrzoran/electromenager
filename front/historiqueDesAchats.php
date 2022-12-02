<?php 
require_once "header.html"; 
require_once "welcomeUser.php";
welcomeUser($userName, $userFirstname);

?>

<html>
  <body>
    <script>
     var data = sessionStorage.getItem('Cle');
     var newArr = JSON.parse(data);
    function tab(newArr){
      for(let i = 0; i < newArr.length; i++){
        arr = newArr[i];
        document.write(arr[1] + ' ' + arr[2] + ' ' + '€ ' + ' ' + '<br>');
      };
    }
    </script>
    <?php  
    $variable = "<script>tab(newArr);</script>";
    echo $variable;
    ?> 
  </body>
  
  <script src ="../Javascript/redirect.js"></script>
</html>