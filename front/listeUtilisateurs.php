<script>
var data = sessionStorage.getItem('Cle');
document.write(data);
var newArr = JSON.parse(data);
document.write(newArr['name']);
</script>


<?php $variable = "<script>document.write(data);</script>";

var_dump($variable);

