<?php 
require_once "header.html"; 
require_once "../back/userId.php"; 
?>

<html>
  <body>
    <script>
      var role = sessionStorage.getItem('Role');
      if(role > 0){
        document.write(role);
      };
    var data = sessionStorage.getItem('Cle');
    var newArr = JSON.parse(data);
    function tab(newArr){
      for(let i = 0; i < newArr.length; i++){
        var arr = newArr[i];
        var image = arr['picture'];
        var picture = '<img src="'+ image +'"width="500" length="500">';
        document.write(arr['label'] + arr['seller'] + arr['description'] + arr['price'] + '€ ' + picture + '<br>');
        description
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