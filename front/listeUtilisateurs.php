<script>
var data = sessionStorage.getItem('Cle');
var newArr = JSON.parse(data);
var arr = newArr[1];
</script>


<?php $variable = "<script>document.write(newArr[1]['name']);</script>";

echo $variable;

