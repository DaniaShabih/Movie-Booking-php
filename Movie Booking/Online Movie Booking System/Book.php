<?php
include("Connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
</head>
<body>
<?php
include("Nav.php");?>
<?php
if ($_SESSION["role"] == "Visitor") { ?>
<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<ul class="breadcumb">
						<li class="active"><a href="Index.php">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Book Now</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="user-information">
					<div class="user-img">
						<a href="#"><img src="images/uploads/user-img.png" alt=""><br></a>
						<label for="file" button type="file" name="image" class="redbtn">Change Picture</button></label>
						<input type="file" id="file" name="image" value="Prebrskaj" style="visibility:hidden;">
						
					</div>
					<div class="user-fav">
						<ul>
							<li  class="active"><a href="#"><?php
						 echo  $_SESSION["name"]??"";
						?></a></li>
							<li><a href="MovieReviews.php">Movie Reviews</a></li>
							<li><a href="MovieRatings.php">Rated movies</a></li>
						</ul>
					</div>
					<div class="user-fav">
						<p>Others</p>
						<ul>
							<li><a href="ChangePassword.php">Change password</a></li>
							<li><a href="Logout.php">Log out</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="form-style-1 user-pro">
					<form action="TicketDetails.php" method="post">
						<h4>MOVIE BOOKING DETAILS</h4>
						<div class="row">
							<div class="col-md-6 form-it">
								<?php
								$id = $_GET["Id"]??"";
								$query = mysqli_query($con , "select * from movie where Id = $id");
								$run = mysqli_fetch_array($query);
								?>
								<label>Movie</label>
								<input type="text" name="movie" value="<?php echo $run[1] ?>" >
							</div>
							<div class="col-md-6 form-it">
								<label>Genres</label>
								<input type="text" name="genres" value="<?php echo $run[2] ?>" >
							</div>
							<div class="col-md-6 form-it">
								<label>Language</label>
								<input type="text" name="lang" value="<?php echo $run[3] ?>" >
							</div>
							<div class="col-md-6 form-it">
								<label>Show Date</label>
								<select name="date" required>
									<option value="">Select Date</option>
								<?php
								$run = mysqli_query($con, "select * from movieshow");
								while ($d = mysqli_fetch_array($run)) {
								echo "<option value='$d[4]'>$d[4]</option>";
								}
								?>
								</select>
							</div>
							<div class="col-md-6 form-it">
								<label>Show Time</label>
								<select name="time" required>
								<option value="">Select Time</option>
								<?php
								$run = mysqli_query($con, "select * from movieshow");
								while ($d = mysqli_fetch_array($run)) {
								echo "<option value='$d[2]'>$d[2]</option>";
								}
								?>
								</select>
							</div>
							<div class="col-md-6 form-it">
								<label>Categories</label>
								<select name="cat" required>
								<option value="">Select Category</option>
								  <option value="Gold">Gold</option>
								  <option value="Platinum">Platinum </option>
								  <option value="Box">Box </option>
								</select>
							</div>
						<div class="col-md-6 form-it">
								<label>Childrens Age Between</label>
								<select name="age" required>
									<option value="">Select Age</option>
								<?php
								$run = mysqli_query($con, "select * from discount");
								while ($d = mysqli_fetch_array($run)) {
								echo "<option value='$d[1]'>$d[1]</option>";
								}
								?>
								</select>
							</div>
							<div class="col-md-6 form-it">
								<label>Cinema Location</label>
								<select name="loc" required>
								<option value="">Select Location</option>
								<?php
								$run = mysqli_query($con, "select * from cinema");
								while ($d = mysqli_fetch_array($run)) {
								echo "<option value='$d[3]'>$d[3]</option>";
								}
								?>
								</select>
							</div>
							<div class="col-md-6 form-it">
								<label>City</label>
								<select name="city" required>
								<option value="">Select City</option>
								<?php
								$run = mysqli_query($con, "select * from cinema");
								while ($d = mysqli_fetch_array($run)) {
								echo "<option value='$d[2]'>$d[2]</option>";
								}
								?>
								</select>
							</div>
							<div class="col-md-6 form-it">
								<label>No. of Children</label>
								<input type="number" name="child" required>
							</div><div class="col-md-6 form-it">
								<label>No. of Adult</label>
								<input type="number" name="adult" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
							<a href="#">
							<input type="submit" name="btn" class="submit" value="Book"></a>
							</div>
						</div> 
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include("Footer.php"); 
}
else {
echo "<script>  alert('Login or Signup');   </script>";
echo '<script> window.location="Index.php";</script>';
}
?>
</body>
</html>


