<?php 
require_once "header.php"; 
if($userID){
 ?>
  <script>
    user = <?php echo $userID ?>;
  </script>
 <?php
}else{
  ?>
  <script>
    user = ' ';
  </script>
 <?php 
};
?>

<html>
  <body>
    <script>
    var data = sessionStorage.getItem('Cle');
    var newArr = JSON.parse(data);
    function tab(newArr){
      for(let i = 0; i < newArr.length; i++){
        var arr = newArr[i];
        var image = arr['picture'];
        var picture = '<img style="vertical-align: top;" class="text-justify figure-img  img-fluid img-thumbnail" alt="Responsive image" src="'+ image +'"width="300" length="300" style="display: inline-block">';
        var form = '<form action="../back/deleteProduct.php" method="POST" enctype="multipart/form-data"><input id="id" type="hidden" name="product" value="' + arr['id'] + '"><button type ="submit">suppprimer ce produit</button></form>';
        document.write('<div style="padding-top: 50px;"><table><tr><th>' + arr['label'] + ' ' +'</th></tr><tr><td>' + picture + '</td>' + '<td><p>' + '</p>' + '<p>' + arr['description'] + ' ' + '</p>' + '<p>' + arr['price'] + '€ ' + '</p></td></tr></table></div>');
        var purchase = '<form action="../back/scriptCart.php" method="POST" enctype="multipart/form-data"><input id="id" type="hidden" name="product" value="' + arr['id'] + '"><button type ="submit">ajouter ce produit à votre panier</button></form>';
        if(user == arr['seller']){
          document.write('votre article ');
          document.write(form);
          document.write(purchase);
        }else{
          
        }
      }
    }
    </script>
    <?php  
    $variable = "<script>tab(newArr);</script>";
    echo $variable ;
    ?>
  </body>
  <?php
     require_once "footer.html"; 
  ?>
  <th></th>
      
  <script src ="../Javascript/redirect.js"></script>
</html>
 