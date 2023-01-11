<?php 
require_once "header.php"; 
require_once "welcomeUser.php";
?>

    
    <script>
     var data = sessionStorage.getItem('Cle');
     var newArr = JSON.parse(data);
    function tab(newArr){
      for(let i = 0; i < newArr.length; i++){
        var arr = newArr[i];
        var image = arr['picture'];
        var picture = '<img style="vertical-align: top;" class="text-justify figure-img  img-fluid img-thumbnail" alt="Responsive image" src="'+ image +'"width="300" length="300" style="display: inline-block">';
        document.write('<div style="padding-top: 50px;"><table><tr><th>' + arr['label'] + ' ' +'</th></tr><tr><td>' + picture + '</td>' + '<td><p>' + '</p>' + '<p>' + arr['description'] + ' ' + '</p>' + '<p>' + arr['price'] + '€ ' + '</p></td></tr></table></div>');
        var form = '<form action="../back/deleteProduct.php" method="POST" enctype="multipart/form-data"><input id="id" type="hidden" name="product" value="' + arr['id'] + '"><button type ="submit">retirer ce produit</button></form>';
        document.write(form);
      };
    }
    </script>

<div class="text-primary" style="text-align: left; background-color: #FFFACD; border-radius: 15px; margin-right: 70%; font-size: 20px; min-width: 300px;">
    <div class="event" id ="cart" style="cursor:pointer; padding-bottom: 10px;">consulter votre panier</div>

    <?php  
    $variable = "<script style='padding-top: 50px' >tab(newArr);</script>";
    echo $variable;
    ?>
  <div class="event" id ="purchase" style="cursor:pointer; padding-top: 50px;">consulter vos achats</div>
</div>
  <?php
    require_once "footer.html"; 
  ?>
  </div>
  <script src ="../Javascript/redirect.js"></script>
