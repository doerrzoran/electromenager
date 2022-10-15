<script>
var data = sessionStorage.getItem('Cle');
var newArr = JSON.parse(data);
var arr = newArr[1];
</script>


<?php $variable = "<script>document.write(arr['name']);</script>";

echo $variable;

