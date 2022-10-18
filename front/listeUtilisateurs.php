

<script>var form = '<form action="../back/deleteUser.php" method="POST" enctype="multipart/form-data"><input id="id" type="hidden" name="id" value="<?php echo $id ?>"><button type ="submit">submit</button></form>';</script>


<script>
var data = sessionStorage.getItem('Cle');
var newArr = JSON.parse(data);
function tab(newArr){
  
  
}



</script>


<?php $variable = "<script>document.write(newArr[0]['id'] + '\n' + newArr[0]['name'] + '\n' + newArr[0]['firstname'] + '\n' + newArr[0]['mail'] + '\n' + newArr[0]['password'] + '<br>')</script>";

echo $variable;

