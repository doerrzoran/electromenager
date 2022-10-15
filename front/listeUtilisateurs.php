<script>
var data = sessionStorage.getItem('Cle');
document.write(data["name"]);
document.write(data[1]);
var newArr = JSON.parse(data);
document.write(newArr);
</script>

