
<html>
  <body>
    <script>
    var data = sessionStorage.getItem('Cle');
    var newArr = JSON.parse(data);
    function tab(newArr){
      for(let i = 0; i < newArr.length; i++){
        document.write(newArr + '<br>');
        var arr = newArr[i];
        var id = arr['id']; 
        var form = '<form action="../back/deleteUser.php" method="POST" enctype="multipart/form-data"><input id="id" type="hidden" name="id" value="' + arr['id'] + '"><button type ="submit">suppprimer cet utilisateur</button></form>';
        document.write(arr['id'] + '\n' + arr['name'] + '\n' + arr['firstname'] + '\n' + arr['mail'] + '\n' + arr['password'] + '\n' +  form + '<br>');
      };
    }
    </script>
    <?php require_once "header.html";  
    $variable = "<script>tab(newArr);</script>";
    echo $variable;
    ?>
  </body>
  
  <script src ="../Javascript/redirect.js"></script>
</html>