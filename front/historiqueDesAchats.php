<?php 
require_once "header.php"; 
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
    <div class="text-primary" style="text-align: left; background-color: #FFFACD; border-radius: 15px; margin-right: 75%; font-size: 20px;min-width: 200px;">
     <?php  
     $variable = "<script>tab(newArr);</script>";
     echo $variable;
    ?> 
   </div>
    
  </body>
  <?php
      require_once "footer.html"; 
    ?>
  <script src ="../Javascript/redirect.js"></script>
</html>