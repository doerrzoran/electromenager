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
      console.log(newArr);
      for(let i = 0; i < newArr.length; i++){
        var arr = newArr[i];
        var image = arr[4];
        var picture = '<img src="'+ image +'"width="500" length="500">';
        document.write(arr[3] + ' ' + arr[5] + ' ' + arr[6] + '€ ' + ' ' + picture + '<br>');
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