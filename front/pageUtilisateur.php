<?php 
require_once "header.html"; 
require_once "welcomeUser.php";
welcomeUser($userName, $userFirstname);

?>

<html>
  <body>
    <script>
    var data = sessionStorage.getItem('Cle');
    var arr = JSON.parse(data);
    function tab(arr){
      for(let i = 0; i < arr.length; i++){
        var arr = arr[i];
        var image = arr['picture'];
        console.log(image);
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