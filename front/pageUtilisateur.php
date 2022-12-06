<?php 
require_once "header.html"; 
require_once "welcomeUser.php";
welcomeUser($userName, $userFirstname);

?>

<html>
  <body>
    <div class="event" id ="cart">consulter votre panier</div>
    <div class="event" id ="purchase">consulter vos achats</div>
    <script>
     var data = sessionStorage.getItem('Cle');
     var newArr = JSON.parse(data);
    function tab(newArr){
      for(let i = 0; i < newArr.length; i++){
        var arr = newArr[i];
        var image = arr['picture'];
        var picture = '<img src="'+ image +'"width="500" length="500">';
        document.write(arr['label'] + ' ' + arr['seller'] + ' ' + arr['description'] + ' ' + arr['price'] + '€ ' + ' ' + picture + '<br>');
        var form = '<form action="../back/deleteProduct.php" method="POST" enctype="multipart/form-data"><input id="id" type="hidden" name="product" value="' + arr['id'] + '"><button type ="submit">suppprimer ce produit</button></form>';
        document.write(form);
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