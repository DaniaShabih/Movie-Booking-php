<?php

include("../Connection.php");

$fetch = $_GET["UserId"];
$delete = "delete from movieshow where Id = $fetch";
$run = mysqli_query($con, $delete);
echo '<script>  alert("Deleted Successfully");</script>';
echo '<script> window.location="ViewShow.php";</script>';




?>