<?php

require_once "../back/dbbFunctions.php";
require_once "../back/userId.php";

$purchase = selectMultipleFromDatabase("user_purchase", "buyer", $userID, $conn);
?>

<script>
var arr = <?php echo json_encode($purchase); ?>;
</script>
<script src="../Javascript/redirectUsersInfo.js"></script>
<script> window.location.href = "../front/historiqueDesAchats.php" </script>
 