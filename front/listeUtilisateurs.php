<?php


$form = '<form action="../back/deleteUser.php" method="POST" enctype="multipart/form-data">
    <input id ="input" type="hidden" name="input" value="Swag"</script>">
    <button type ="submit">submit</button>
</form>';

?>

<script>
var data = sessionStorage.getItem('Cle');
var newArr = JSON.parse(data);
function tab(newArr){
  for(let i = 0; i < newArr.length; i++){
    var arr = newArr[i];
    document.write( arr['name'] + '\n' + arr['firstname'] + '\n' + arr['mail'] + '\n' + arr['password'] + '<?php $form ?>' + '\n' + '<?php echo $form ?>' + '<br>');
    var id = arr['id']; 
    document.getElementById("input").value = id;
  }
}

var num = 2;

</script>


<?php $variable = "<script>tab(newArr);</script>";

echo $variable;

