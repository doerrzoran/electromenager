<script>
var data = sessionStorage.getItem('Cle');
document.write(data);
var newArr = JSON.parse(data);
</script>

<?php 
$key1 = "<script>document.write(newArr[0]);</script>";
$key2 = "<script>document.write(newArr[1]);</script>";


echo $key1.':'.$key2;