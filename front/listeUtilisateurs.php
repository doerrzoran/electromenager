<script>
var data = sessionStorage.getItem('Cle');
var newArr = JSON.parse(data);
</script>


<?php $variable = "<script>document.write(newArr['name']);</script>";


