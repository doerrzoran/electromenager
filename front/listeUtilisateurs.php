

<script>var form = '<form action="../back/deleteUser.php" method="POST" enctype="multipart/form-data"><input id="id" type="hidden" name="id" value="<?php echo $id ?>"><button type ="submit">submit</button></form>';</script>


<script>
var data = sessionStorage.getItem('Cle');
var newArr = JSON.parse(data);
function tab(newArr){
  for(let i = 0; i < newArr.length; i++){
    var arr = newArr[i];
    var id = arr['id']; 
    document.write(arr['id'] + '\n' + arr['name'] + '\n' + arr['firstname'] + '\n' + arr['mail'] + '\n' + arr['password'] + '<br>');
  }
  
}



</script>


<?php $variable = "<script>tab(newArr);</script>";

echo $variable.'STOP';

$array = "<script>document.write(newArr);</script>";

echo $array[0]['name'];

