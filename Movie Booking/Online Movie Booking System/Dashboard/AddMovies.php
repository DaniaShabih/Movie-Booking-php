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
                        <div class="card">
                        <div class="card-body">

                        <form action="#" method="post" enctype="multipart/form-data">
                        <h3 style="font-family:'Times New Roman', Times, serif; color:white; text-align:center;">ADD MOVIES</h3>
						<br>
                        <div class="row">  
                            <div class="col-md-4 form-it">
                            <br>
                                <h5>Movie Name</h5>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-4 form-it">
                            <br>
                            <h5>Movie Genres</h5>
                                <input type="text" name="gen" class="form-control" required>
                            </div>
                            <div class="col-md-4 form-it">
                            <br>
                            <h5>Movie Language</h5>
                                <input type="text" name="lang" class="form-control" required>
                            </div>
                            <div class="col-md-4 form-it">
                            <br>
                            <h5>Release Date</h5>
                                <input type="date" name="date" class="form-control" required>
                            </div>
                            <div class="col-md-4 form-it">
                            <br>
                            <h5>Movie Actors</h5>
                                <input type="text" name="actor" class="form-control" required>
                            </div>
                            <div class="col-md-4 form-it">
                            <br>
                            <h5>Movie Director</h5>
                                <input type="text" name="director" class="form-control" required>
                            </div>
                            <div class="col-md-4 form-it">
                            <br>
                            <h5>Ratings</h5>
                                <input type="text" name="rat" class="form-control" required>
                            </div>
                          <div class="col-md-4 form-it">
                          <br>
                  
                            <h5>Movie Poster</h5>
                            <input type="file" name="image"  class="file" onchange="document.getElementById('myimage').src = window.URL.createObjectURL(this.files[0])">
                            <img id="myimage" alt="" width="120px" height="150px" required>
                          </div>
                          <div class="col-md-4 form-it">
                              <br>
                            <h5>Movie Trailer</h5>
                            <input type="file" name="trail"  class="file" id="videoUpload">
                            <video width="250px" height="150px" controls required></video>
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
<script>
document.getElementById("videoUpload")
.onchange = function(event) {
  let file = event.target.files[0];
  let blobURL = URL.createObjectURL(file);
  document.querySelector("video").src = blobURL;
}
</script>
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
            $insert = "INSERT INTO movie(Name, Genres, Language, ReleaseDate, Actors, Director, Rating, Image, Trailer)
            VALUES('$a','$b','$c','$d','$e','$f', '$g', '$folders', '$video')";
            $run = mysqli_query($con, $insert);
            move_uploaded_file($temperoryLoc,$folders);
            move_uploaded_file($temperoryLocv,$video);
            echo '<script>  alert("Movies Added Successfully");   </script>';
	        echo '<script> window.location="ViewMovies.php";</script>';

} 
}
?>