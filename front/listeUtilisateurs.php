

<script>var form = '<form action="../back/deleteUser.php" method="POST" enctype="multipart/form-data"><input id="id" type="hidden" name="id" value="Swag"><button type ="submit">submit</button></form>';</script>


<script>
function displayUser(arr){
    document.write(arr['id'] + '\n' + arr['name'] + '\n' + arr['firstname'] + '\n' + arr['mail'] + '\n' + arr['password'] +'\n' + form + '<br>');
    var id = arr['id']; 
    document.getElementById("id").value = id;
}
var data = sessionStorage.getItem('Cle');
var newArr = JSON.parse(data);
function tab(newArr){
  for(let i = 0; i < newArr.length; i++){
    var arr = newArr[i];
    displayUser(arr);
  } 
}



</script>


<?php $variable = "<script>tab(newArr);</script>";

echo $variable;

