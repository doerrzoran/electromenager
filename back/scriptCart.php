
<?php
require_once 'dbbFunctions.php';
require_once 'userId.php';

?>
<script>
user = <?php echo $userID ?>
console.log(user);
if(user == null){
  window.location.href = "../front/creationDeCompte.php";
}
</script>

<?php
$user = $userID;
$product = $_POST["product"];

$product = insertIntoDatabase("_cart", "client, product", "'$user', '$product'", $conn);

