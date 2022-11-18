<?php

require_once "../back/dbbFunctions.php";
require_once "../back/userId.php";

$products = selectMultipleFromDatabase("_product", "seller", $userID, $conn);
var_dump($products);
?>

<script>
var arr = <?php echo json_encode($products); ?>;
</script>
<!-- <script src="../Javascript/redirectUsersInfo.js"></script>
<script> window.location.href = "../front/pageUtilisateur.php" </script> -->
