<?php

include("../Connection.php");

$fetch = $_GET["UserId"];
$delete = "delete from booking where Id = $fetch";
$run = mysqli_query($con, $delete);
echo '<script>  alert("Deleted Successfully");</script>';
echo '<script> window.location="ViewBooking.php";</script>';




?>