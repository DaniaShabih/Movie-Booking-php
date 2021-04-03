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
<h3 style="font-family:'Times New Roman', Times, serif; color:white; text-align:center;">BOOKING DETAILS</h3>

 <?php 
echo"<div class='container'>";
echo"<div class='column justify-content-center align-items-center' style='height:100vh'> ";
$sql = "SELECT * FROM booking";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-bordered' ";
        
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Name</th>";
                echo "<th>Movie</th>";
                echo "<th>Genres</th>";
                echo "<th>Language</th>";
                echo "<th>Date</th>";
                echo "<th>Time</th>";
                echo "<th>Category</th>";
                echo "<th>No. of Childrens</th>";
                echo "<th>No. of Adults</th>";
                echo "<th>Seats</th>";
                echo "<th>Children Age Between</th>";
                echo "<th>Location</th>";
                echo "<th>City</th>";
                echo "<th>Booking Date</th>";
                echo "<th>Total Price</th>";
                echo "<th>Discount Price</th>";
                echo "<th>Delete</th>";
                



                

            echo "</tr>";
         
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "<td>" . $row[2] . "</td>";
                echo "<td>" . $row[3] . "</td>";
                echo "<td>" . $row[4] . "</td>";
                echo "<td>" . $row[5] . "</td>";
                echo "<td>" . $row[6] . "</td>";
                echo "<td>" . $row[7] . "</td>";
                echo "<td>" . $row[8] . "</td>";
                echo "<td>" . $row[9] . "</td>";
                echo "<td>" . $row[10] . "</td>";
                echo "<td>" . $row[11] . "</td>";
                echo "<td>" . $row[12] . "</td>";
                echo "<td>" . $row[13] . "</td>";
                echo "<td>" . $row[14] . "</td>";
                echo "<td>" . $row[15] . "</td>";
                echo "<td>" . $row[16] . "</td>";
                echo "<td><a href='BookDelete.php?UserId=$row[0]'><button type='submit' class='btn btn-primary'>Delete</button></a></td>";

                


            echo "</tr>";
        }
      
        echo "</table>";
    }}
    echo "</div>";
    echo "</div>";

?>


<?php
include("footer.php");
?>
</body>
</html>
