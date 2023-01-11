<?php 
require_once "header.php"; 
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
        var picture = '<img style="vertical-align: top;" class="text-justify figure-img  img-fluid img-thumbnail" alt="Responsive image" src="'+ image +'"width="300" length="300" style="display: inline-block">';
        document.write('<div style="padding-top: 50px;"><table><tr><th>' + arr[3] + ' ' +'</th></tr><tr><td>' + picture + '</td>' + '<td><p>' + '</p>' + '<p>' + arr[5] + ' ' + '</p>' + '<p>' + arr[6] + '€ ' + '</p></td></tr></table></div>');
        var form = '<form action="../back/deleteCart.php" method="POST" enctype="multipart/form-data"><input id="id" type="hidden" name="product" value="' + arr[0] + '"><button type ="submit">retirer ce produit de votre panier</button></form>';
        var buy = '<form action="../back/scriptPurchase.php" method="POST" enctype="multipart/form-data"><input id="id" type="hidden" name="product" value="' + arr[0] + '"><button type ="submit">acheter</button></form>';
        document.write(form);
        document.write(buy);
      };
    }
    </script>
    <div class="text-primary" style="text-align: left; background-color: #FFFACD; border-radius: 15px; margin-right: 1000px; font-size: 30px;">
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