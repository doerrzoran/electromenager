<?php

require_once "../back/dbbFunctions.php";
require_once "../back/userId.php";

$carts = selectMultipleFromDatabase("_cart", "client", $userID, $conn);

$products = array();
foreach($carts as $product){
    $products[] = $product;
}

var_dump($products);
?>

<script>
var arr = <?php echo json_encode($carts); ?>;
</script>
<script src="../Javascript/redirectUsersInfo.js"></script>
<script> window.location.href = "../front/panier.php" </script>
