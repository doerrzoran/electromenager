<?php 
require_once "header.html"; 
?>

<html>
  <body>
    <script>
    var data = sessionStorage.getItem('Cle');
    var newArr = JSON.parse(data);
    function tab(newArr){
      for(let i = 0; i < newArr.length; i++){
        var arr = newArr[i];
        var image = arr['image'];
        var picture = '<img src="'+ image +'" >';
        document.write(arr['label'] + arr['seller'] + arr['price'] + '<br>');
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