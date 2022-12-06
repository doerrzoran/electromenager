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
        var arr = newArr[i];
        var image = arr[4];
        var picture = '<img src="'+ image +'"width="500" length="500">';
        document.write(arr[3] + ' ' + arr[5] + ' ' + arr[6] + '€ ' + ' ' + picture + '<br>');
        var form = '<form action="../back/deleteCart.php" method="POST" enctype="multipart/form-data"><input id="id" type="hidden" name="product" value="' + arr[0] + '"><button type ="submit">retirer ce produit de votre panier</button></form>';
        var buy = '<form action="../back/scriptPurchase.php" method="POST" enctype="multipart/form-data"><input id="id" type="hidden" name="product" value="' + arr[0] + '"><button type ="submit">acheter</button></form>';
        document.write(form);
        document.write(buy);
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