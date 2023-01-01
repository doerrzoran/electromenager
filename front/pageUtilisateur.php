<?php 
require_once "header.php"; 
require_once "welcomeUser.php";

?>

<html>
  <body>
    <div class="event" id ="cart" style="cursor:pointer; font-size: 20px; padding-bottom: 10px;">consulter votre panier</div>
    <div class="event" id ="purchase" style="cursor:pointer; font-size: 20px; padding-bottom: 10px;">consulter vos achats</div>
    <script>
     var data = sessionStorage.getItem('Cle');
     var newArr = JSON.parse(data);
    function tab(newArr){
      for(let i = 0; i < newArr.length; i++){
        var arr = newArr[i];
        var image = arr['picture'];
        var picture = '<img style="vertical-align: top;" class="text-justify figure-img  img-fluid img-thumbnail" alt="Responsive image" src="'+ image +'"width="300" length="300" style="display: inline-block">';
        document.write('<table style="padding-top: 50px"><tr><th>' + arr['label'] + ' ' +'</th></tr><tr><td>' + picture + '</td>' + '<td><p>' + '</p>' + '<p>' + arr['description'] + ' ' + '</p>' + '<p>' + arr['price'] + '€ ' + '</p></td></tr></table>');
        var form = '<form action="../back/deleteProduct.php" method="POST" enctype="multipart/form-data"><input id="id" type="hidden" name="product" value="' + arr['id'] + '"><button type ="submit">suppprimer ce produit</button></form>';
        document.write(form);
      };
    }
    </script>
    <?php  
    $variable = "<script style='padding-top: 50px' >tab(newArr);</script>";
    echo $variable;
    ?>
  </body>
  <?php
    require_once "footer.html"; 
  ?>
  
  <script src ="../Javascript/redirect.js"></script>
</html>