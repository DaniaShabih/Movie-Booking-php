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
    $query = mysqli_query($con,"select * from movie where Id = $fetch");
    $record = mysqli_fetch_array($query);
?>
                        <div class="container">
                        <div class="row justify-content-center align-items-center" style="height:100vh">
                        <div class="card">
                        <div class="card-body">

                        <form action="#" method="post" enctype="multipart/form-data">
                        <h3 style="font-family:'Times New Roman', Times, serif; color:white; text-align:center;">Movie Edit</h3>
						<br>
                        <div class="row">  
                            <div class="col-md-4 form-it">
                            <br>
                                <h5>Movie Name</h5>
                                <input type="text" name="name" class="form-control" value="<?php echo $record[1]; ?>">
                            </div>
                            <div class="col-md-4 form-it">
                            <br>
                            <h5>Movie Genres</h5>
                                <input type="text" name="gen" class="form-control" value="<?php echo $record[2]; ?>">
                            </div>
                            <div class="col-md-4 form-it">
                            <br>
                            <h5>Movie Language</h5>
                                <input type="text" name="lang" class="form-control" value="<?php echo $record[3]; ?>">
                            </div>
                            <div class="col-md-4 form-it">
                            <br>
                            <h5>Release Date</h5>
                                <input type="date" name="date" class="form-control" value="<?php echo $record[4]; ?>">
                            </div>
                            <div class="col-md-4 form-it">
                            <br>
                            <h5>Movie Actors</h5>
                                <input type="text" name="actor" class="form-control" value="<?php echo $record[5]; ?>">
                            </div>
                            <div class="col-md-4 form-it">
                            <br>
                            <h5>Movie Director</h5>
                                <input type="text" name="director" class="form-control" value="<?php echo $record[6]; ?>">
                            </div>
                            <div class="col-md-4 form-it">
                            <br>
                            <h5>Ratings</h5>
                                <input type="text" name="rat" class="form-control" value="<?php echo $record[7]; ?>">
                            </div>
                          <div class="col-md-4 form-it">
                          <br>
                  
                            <h5>Movie Poster</h5>
                            <input type="file" name="image"  class="file">
                            <img src="<?php echo $record[8]; ?>" width="120px" height="150px">
                          </div>
                          <div class="col-md-4 form-it">
                              <br>
                            <h5>Movie Trailer</h5>
                            <input type="file" name="trail"  class="file">
                            <video src="<?php echo $record[9]; ?>" width="250px" height="150px" controls></video>
                          </div>
                            
						<div class="col-md-4">
                            <br>
                            <button type="submit" name="btn" class="btn btn-primary">Save</button>
                        </div>
						</div>
                        </form>
                </div></div></div></div>
</div></div>

        <?php
include ("footer.php");
?>
</body>

</html>

<?php
if(isset($_POST["btn"])){
	$a = $_POST["name"];
	$b = $_POST["gen"];
	$c = $_POST["lang"];	
	$d = $_POST["date"];
	$e = $_POST["actor"];
	$f = $_POST["director"];
	$g = $_POST["rat"];
	
    $name = $_FILES["image"]["name"];
    $size = $_FILES["image"]["size"];
    $ext = $_FILES["image"]["type"];
    $temperoryLoc = $_FILES["image"]["tmp_name"];
    $folders= "images/" . $name;
    
    $namev = $_FILES["trail"]["name"];
    $sizev = $_FILES["trail"]["size"];
    $extv = $_FILES["trail"]["type"];
    $temperoryLocv = $_FILES["trail"]["tmp_name"];
    $video= "images/" . $namev;
        if(strtolower($ext) == "image/jpg" 
        || strtolower($ext) == "image/jpeg" 
        || strtolower($ext) == "image/png" 
        || strtolower($extv) == "video/mp4")
            {
            $update = "update movie set Name='$a', Genres='$b', Language='$c', ReleaseDate='$d', Actors='$e', Director='$f', Rating='$g', Image='$folders', Trailer='$video' WHERE Id = $fetch";
            $run = mysqli_query($con, $update);
            move_uploaded_file($temperoryLoc,$folders);
            move_uploaded_file($temperoryLocv,$video);
            echo '<script>  alert("Edited Successfully");   </script>';
	        echo '<script> window.location="ViewMovies.php";</script>';

} 
else {
    echo '<script>  alert("Not Successfully Edited");   </script>';
}
}
?>