

<script>var form = '<form action="../back/deleteUser.php" method="POST" enctype="multipart/form-data"><input id="id" type="hidden" name="id" value="<?php echo $id ?>"><button type ="submit">submit</button></form>';</script>


<script>
var data = sessionStorage.getItem('Cle');
var newArr = JSON.parse(data);
function tab(newArr){
  for(let i = 0; i < newArr.length; i++){
    var arr = newArr[i];
    var id = arr['id']; 
     <?php $id = "<script>document.write(id)</script>" ?>
    document.write(arr['id'] + '\n' + arr['name'] + '\n' + arr['firstname'] + '\n' + arr['mail'] + '\n' + arr['password'] + '\n' + form + '<br>');
  }
  
}



</script>


<?php $variable = "<script>document.write(arr['id'] + '\n' + arr['name'] + '\n' + arr['firstname'] + '\n' + arr['mail'] + '\n' + arr['password'] + '\n' + form + '<br>');</script>";

echo $variable;

