<?php

require_once "../back/dbbFunctions.php";
require_once "../back/userId.php";

$cart = selectMultipleFromDatabase("_cart", "client", $userID, $conn);
print_r($cart);
// $products = selectMultipleFromDatabase("_product", "id", , $conn);
// ?>

// <script>
// var arr = <?php echo json_encode($products); ?>;
// </script>
// <script src="../Javascript/redirectUsersInfo.js"></script>
// <script> window.location.href = "../front/panier.php" </script>