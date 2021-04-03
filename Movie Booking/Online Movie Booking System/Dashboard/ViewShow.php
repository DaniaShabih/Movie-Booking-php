<?php
include("../Connection.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Movie Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include("nav.php");
?>
<br>
<br>
<br>
<h3 style="font-family:'Times New Roman', Times, serif; color:white; text-align:center;">SHOW DETAILS</h3>

 <?php 
echo"<div class='container'>";
$sql = "SELECT * FROM movieshow";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-bordered'>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Movie</th>";
                echo "<th>Start Time</th>";
                echo "<th>End Time</th>";
                echo "<th>Date</th>";
                echo "<th>Edit</th>";
                echo "<th>Delete</th>";


            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "<td>" . $row[2] . "</td>";
                echo "<td>" . $row[3] . "</td>";
                echo "<td>" . $row[4] . "</td>";
                echo "<td><a href='ShowEdit.php?UserId=$row[0]'><button type='submit' class='btn btn-primary'>Edit</button></a></td>";
                echo "<td><a href='ShowDelete.php?UserId=$row[0]'><button type='submit' class='btn btn-primary'>Delete</button></a></td>";


            echo "</tr>";
        }
        echo "</table>";
    }
}
    echo "</div>";

?>
<?php
include("footer.php");
?>
</body>
</html>
