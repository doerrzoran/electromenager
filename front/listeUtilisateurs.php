<script>
var data = sessionStorage.getItem('Cle');
var newArr = JSON.parse(data);
document.write(newArr.length);
var num = 2;
var arr = newArr[1];
</script>


<?php $variable = "<script>document.write(newArr[num]['name']);</script>";

echo $variable;

