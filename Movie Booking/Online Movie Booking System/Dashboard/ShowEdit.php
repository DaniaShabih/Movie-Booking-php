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
<?php
    $fetch = $_GET["UserId"]??"";
    $query = mysqli_query($con,"select * from movieshow where Id = $fetch");
    $record = mysqli_fetch_array($query);
?>
<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                        <h3 style="font-family:'Times New Roman', Times, serif; color:white; text-align:center;">SHOW EDIT</h3>

                            <div class="form-group">
                            <h5>Movie</h5>
                            <input type="text" name="movie" class="form-control" value="<?php echo $record[1]; ?>">
                            </div>
                            <div class="form-group">
                            <h5>Movie Show Start Time</h5>
                                <input type="time" name="time1" class="form-control" value="<?php echo $record[2]; ?>">
                            </div>
                            <div class="form-group">
                            <h5>Movie Show End Time</h5>
                                <input type="time" name="time2" class="form-control" value="<?php echo $record[3]; ?>">
                            </div>
                            <div class="form-group">
                            <h5>Movie Show Date</h5>
                                <input type="date" name="date" class="form-control" value="<?php echo $record[4]; ?>">
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
<?php
if(isset($_POST["btn"])){
	$a = $_POST["movie"];
	$b = $_POST["time1"];
	$c = $_POST["time2"];
	$d = $_POST["date"];

	
	
	$update = "update movieshow SET Movie='$a',StartTime='$b',EndTime='$c', Date='$d' WHERE Id = $fetch";
	
	$run = mysqli_query($con, $update);
	echo '<script>  alert("Edited Successfully");   </script>';
	echo '<script> window.location="ViewShowtime.php";</script>';
	
}
?>
</body>

</html>

