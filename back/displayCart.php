<?php

require_once "../back/dbbFunctions.php";
require_once "../back/userId.php";

$carts = selectMultipleFromDatabase("_cart", "client", $userID, $conn);

$products = array();
foreach($carts as $cart){
    $productID = $cart['product'];
    $product = selectFromDatabase("_product", "id", $productID, $conn)
    $products[] = $product;
}

?>

<script>
var arr = <?php echo json_encode($products); ?>;
</script>
<script src="../Javascript/redirectUsersInfo.js"></script>
<script> window.location.href = "../front/panier.php" </script>
