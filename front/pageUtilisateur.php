<?php 
require_once "header.html"; 
require_once "welcomeUser.php";
welcomeUser($userName, $userFirstname);

?>

<html>
  <body>
    <script>
     var data = sessionStorage.getItem('Cle');
    var arr = JSON.parse(data);
    var test = arr[0];
    console.log(test);
    var test = test[1];
    // console.log(test);
    function tab(test){
      for(let i = 0; i < arr.length; i++){
        // var arr = arr[i];
        var image = arr['picture'];
        console.log(image);
        var picture = '<img src="'+ image +'"width="500" length="500">';
        document.write(arr['label'] + ' ' + arr['seller'] + ' ' + arr['description'] + ' ' + arr['price'] + '€ ' + ' ' + picture + '<br>');
      };
    }
    </script>
    <?php  
    $variable = "<script>tab(arr);</script>";
    echo $variable;
    ?>
  </body>
  
  <script src ="../Javascript/redirect.js"></script>
</html>