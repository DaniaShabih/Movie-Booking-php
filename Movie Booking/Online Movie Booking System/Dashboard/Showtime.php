<?php
include("../Connection.php");

?>
<!DOCTYPE html>

<html lang="en">

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
</head>
<body>
<?php
include ("nav.php");

?>
<br>
<br>
<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                        <h3 style="font-family:'Times New Roman', Times, serif; color:white; text-align:center;">ADD SHOW DETAILS</h3>
<br>
                        <div class="form-group">
                                <h5>Movie</h5>
                                <select name="movie" class="form-control" required>
								<?php
								$run = mysqli_query($con, "select * from movie");
								while ($d = mysqli_fetch_array($run)) {
								echo "<option value='$d[1]'>$d[1]</option>";
								}
								?>
								</select>
                            </div>
                        
                            <div class="form-group">
                                <h5>Movies Show Start Time</h5>
                                <input type="time" name="time1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <h5>Movies Show End Time</h5>
                                <input type="time" name="time2" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <h5>Movies Show Date</h5>
                                <input type="date" name="date" class="form-control" required>
                            </div>
                            <button type="submit" name="btn" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php
include ("footer.php");
?>
</body>

</html>

<?php
if(isset($_POST["btn"])){
    $a = $_POST["movie"];
	$b = $_POST["time1"];
	$c = $_POST["time2"];
    $d = $_POST["date"];
	
	
	$insert = "INSERT INTO movieshow(Movie, StartTime, EndTime, Date)
	VALUES('$a','$b','$c','$d')";
	$run = mysqli_query($con, $insert);
	echo '<script>  alert("Show Time Added Successfully");   </script>';
	        echo '<script> window.location="ViewShow.php";</script>';
	
}



?>