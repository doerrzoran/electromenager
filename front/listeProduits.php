<?php 
require_once "header.html"; 
require_once "welcomeUser.php";
welcomeUser($userName, $userFirstname);
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
        var picture = '<img src="'+ image +'"width="500" length="500">';
        document.write(arr['label'] + arr['seller'] + arr['description'] + arr['price'] + '€ ' + picture + '<br>');
        if(user == arr['seller']){
          document.write('votre article');
        }else{
          document.write(' ');
        }
      }
    }
    </script>
    <?php  
    $variable = "<script>tab(newArr);</script>";
    echo $variable ;
    ?>
  </body>
  
  <script src ="../Javascript/redirect.js"></script>
</html>