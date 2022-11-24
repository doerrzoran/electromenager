
<html>
  <body>
    <script>
    var data = sessionStorage.getItem('Cle');
    var newArr = JSON.parse(data);
    function tab(newArr){
      for(let i = 0; i < newArr.length; i++){
        var arr = newArr[i];
        var form = '<form action="../back/deleteUser.php" method="POST" enctype="multipart/form-data"><input id="id" type="hidden" name="id" value="' + arr['id'] + '"><button type ="submit">suppprimer cet utilisateur</button></form>';
        document.write(arr['id'] + '\n' + arr['name'] + '\n' + arr['firstname'] + '\n' + arr['mail'] + '\n' + arr['password'] + '\n' + '<br>');
        if(arr['role'] == 1){
          document.write('administrateur' + '<br>');
        }else{
          document.write(form);
        }
      };
    }
    </script>
    <?php require_once "header.html";
    require_once "welcomeUser.php";
    ?>
    <?php welcomeUser($userName, $userFirstname);  
    $variable = "<script>tab(newArr);</script>";
    echo $variable;
    ?>
  </body>
  
  <script src ="../Javascript/redirect.js"></script>
</html>