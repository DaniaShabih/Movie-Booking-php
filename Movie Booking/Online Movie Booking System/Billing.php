<?php
include("Connection.php");


?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
include("Nav.php");
?>
<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
				
					<ul class="breadcumb">
						<li class="active"><a href="Index.php">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Billing Address</li>
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
				<div class="form-style-1 user-pro" action="#">
					<form action="#" method="post">
						<h4>Billing Address</h4>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Full Name</label>
								<input type="text" name="name" placeholder="John More Doe" required>
							</div>
							<div class="col-md-6 form-it">
                            <label>Email</label>
								<input type="text" name="email" placeholder="john@example.com" required>
							</div>
							<div class="col-md-6 form-it">
                            <label>Address</label>
								<input type="text" name="address" placeholder="542 W. 15th Street" required>
							</div>
							<div class="col-md-6 form-it">
                            <label>City</label>
								<input type="text" name="city" placeholder="New York" required>
							</div>
							<div class="col-md-6 form-it">
                            <label>State</label>
								<input type="text" name="state" placeholder="NY" required>
							</div>
							<div class="col-md-6 form-it">
                            <label>Zip</label>
								<input type="text" name="zip" placeholder="10001" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
							<a href="">
							<input type="submit" name="btn" class="submit" value="Checkout"></a>
							
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
?>
</body>
</html>



<?php
if(isset($_POST["btn"])){
	$a = $_POST["name"];
	$b = $_POST["email"];
	$c = $_POST["address"];
	$d = $_POST["city"];
	$e = $_POST["state"];
	$f = $_POST["zip"];

	
	$insert = "INSERT INTO billing(Name, Email, Address, City, State, Zip) 
	VALUES('$a','$b','$c','$d','$e','$f')";
	$run = mysqli_query($con, $insert);
	echo '<script> window.location="Checkout.php";</script>';
	
	
}?>