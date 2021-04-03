<?php

include("../Connection.php");

$fetch = $_GET["UserId"];
$delete = "delete from discount where Id = $fetch";
$run = mysqli_query($con, $delete);
echo '<script>  alert("Deleted Successfully");</script>';
echo '<script> window.location="Discount.php";</script>';



?>