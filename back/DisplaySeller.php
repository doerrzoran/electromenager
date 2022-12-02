<?php

require_once "../back/dbbFunctions.php";
require_once "../back/userId.php";

$purchase = selectMultipleFromDatabase("_product", "buyer", $userID, $conn);
?>

<script>
var arr = <?php echo json_encode($purchase); ?>;
</script>
<script src="../Javascript/redirectUsersInfo.js"></script>
<script> window.location.href = "../front/pageUtilisateur.php" </script>
