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
    console.log(newArr);
    function tab(newArr){
      for(let i = 0; i < newArr.length; i++){
        var arr = newArr[i];
        var image = arr['picture']; 
        var picture = '<img src="'+ image +'"width="500" length="500">';
        console.log(picture);
        document.write(arr['label'] + ' ' + arr['seller'] + ' ' + arr['description'] + ' ' + arr['price'] + '€ ' + ' ' + picture + '<br>');
      };
    }
    </script>
    <?php  
    $variable = "<script>tab(arr);</script>";
    echo $variable;
    ?>
  </body>
  
  <script src ="../Javascript/redirect.js"></script>
</html>