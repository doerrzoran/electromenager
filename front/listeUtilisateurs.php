<script>
var data = sessionStorage.getItem('Cle');
var newArr = JSON.parse(data);
function tab(newArr){
  for(let i = 0; i < newArr.length; i++){
    var arr = newArr[i];
    document.write(arr['name'].' '.arr['name'].' ')
  }
}

var num = 2;

</script>


<?php $variable = "<script>tab(newArr);</script>";

echo $variable;

