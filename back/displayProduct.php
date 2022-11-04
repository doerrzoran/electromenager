<?php

require_once "../back/dbbFunctions.php";

$products = selectAllFromDatabase("_product", $conn);


?>

<script>
var arr = <?php echo json_encode($products); ?>;
</script>
<script src="../Javascript/redirectUsersInfo.js"></script>
<script> window.location.href = "../front/listeProduits.php" </script>

