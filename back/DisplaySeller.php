<?php

require_once "../back/dbbFunctions.php";
require_once "../back/userId.php";

$products = selectFromDatabase("_product", "seller", $userID, $conn);
print_r($products);
?>

<!-- <script>
var arr = <?php echo json_encode($products); ?>;
</script>
<script src="../Javascript/redirectUsersInfo.js"></script>
<script> window.location.href = "../front/pageUtilisateur.php" </script> -->
