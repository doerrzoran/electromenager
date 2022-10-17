<script>
var data = sessionStorage.getItem('Cle');
var newArr = JSON.parse(data);
function tab(newArr){
  for(let i = 0; i < newArr.length; i++){
    var arr = newArr[i];
    document.write(arr['id'] + arr['name'] + ' \n' + arr['firstname'] + ' \n' + arr['mail'] + ' \n' + arr['password'] + '<br>');
  }
}

var num = 2;

</script>


<?php $variable = "<script>tab(newArr);</script>";

echo $variable;

