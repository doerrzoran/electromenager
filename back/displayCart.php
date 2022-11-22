<?php

require_once "../back/dbbFunctions.php";
require_once "../back/userId.php";

$carts = selectMultipleFromDatabase("_cart", "client", $userID, $conn);

?>

<script>
var arr = <?php echo json_encode($carts); ?>;
</script>
<script src="../Javascript/redirectUsersInfo.js"></script>
<script> window.location.href = "../front/panier.php" </script>
