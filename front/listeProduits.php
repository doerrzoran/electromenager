<?php 
require_once "header.html"; 
require_once "../back/userId.php"; 
if($userName){
  echo $userID; 
  ?><script>
    var user = "<?php echo $userID ?>";
    console.log(user);
  </script><?php 
}
?>

<html>
  <body>
    <script>
    function tab(newArr){
      for(let i = 0; i < newArr.length; i++){
        var arr = newArr[i];
        var image = arr['picture'];
        var picture = '<img src="'+ image +'"width="500" length="500">';
        document.write(arr['label'] + arr['seller'] + arr['description'] + arr['price'] + '€ ' + picture + user + '<br>');
        // if(user == arr['seller']){
        //   document.write('votre produit !');
        // };
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