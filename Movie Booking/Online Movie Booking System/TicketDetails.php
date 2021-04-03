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
include("Nav.php");
?>
<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1></h1>
					<ul class="breadcumb">
						<li class="active"><a href="Index.php">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Ticket Details</li>
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
							<li><a href="#"><?php
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
<?php
if(isset($_POST["btn"])){
	$a = $_POST["movie"];
	$b = $_POST["genres"];
	$c = $_POST["lang"];
	$d = $_POST["date"];
	$e = $_POST["time"];
	$f = $_POST["cat"];
	$g = $_POST["child"];
	$h = $_POST["adult"];
	$i = $g + $h;
	$j = $_POST["age"];
	$k = $_POST["loc"];
	$l = $_POST["city"];
    $name = $_SESSION["name"];
	$date = date("d-m-Y");
	if($j == "3 to 12")
	{
	$child = $g * 500;
	$off = $child * 0.50 ;
	$adult = $h * 700;
	$Amount = $child + $adult ;
	$discount = $off + $adult;
	
}
else 
{
	$child = $g * 500;
	$adult = $h * 700;
	$Amount = $child + $adult ;


}
	
	$insert = "Insert into booking(Name, Movie, Genres, Language, Date, Time, Category, ChildrenSeat, AdultSeat, Seats, ChildrenAge, Location, City, BookingDate,TotalPrice, DiscountPrice) 
	VALUES('$name','$a','$b','$c','$d','$e','$f', $g, $h, $i, '$j','$k','$l','$date', '$Amount','$discount')";
	$run = mysqli_query($con, $insert);
    $_SESSION["seats"]=$i;
    $_SESSION["price"]=$Amount;
    $_SESSION["dprice"]=$discount;



	
	
}


    echo "<div class='col-md-9 col-sm-12 col-xs-12'>";
        echo "<div class='col-md-9 col-sm-12 col-xs-12'>";
				echo "<div class='form-style-1 user-pro'>";
                       echo" <h4>TICKET DETAILS</h4>";
                       	echo    "<div class='row'>";
                           echo"<div class='col-md-6 form-it'>";
                           echo"<label>Movie</label>";
                           echo"<p style='color:yellow;'>$a</p>"; 
                           echo"</div>";

                           echo"<div class='col-md-6 form-it'>";
                           echo"<label>Genres</label>";
                           echo"<p style='color:yellow;'>$b</p>"; 
                           echo"</div>";

							
                           echo"<div class='col-md-6 form-it'>";
                           echo"<label>Language</label>";
                           echo"<p style='color:yellow;'>$c</p> ";
                           echo"</div>";
                            
                           echo"<div class='col-md-6 form-it'>";
                           echo"<label>Show Date</label>";
                           echo"<p style='color:yellow;'>$d</p>";
                           echo"</div>";

                           echo"<div class='col-md-6 form-it'>";
                           echo"<label>Show Time</label>";
                           echo"<p style='color:yellow;'>$e</p>";
                           echo"</div>";
                           
                           echo"<div class='col-md-6 form-it'>";
                           echo"<label>Category</label>";
                           echo"<p style='color:yellow;'>$f</p>";
                           echo"</div>";
                           
                           echo"<div class='col-md-6 form-it'>";
                           echo"<label>No. of Childrens</label>";
                           echo"<p style='color:yellow;'>$g</p>";
                           echo"</div>";
                           
                           echo"<div class='col-md-6 form-it'>";
                           echo"<label>No. of Adults</label>";
                           echo"<p style='color:yellow;'>$h</p>";
                           echo"</div>";

                           echo"<div class='col-md-6 form-it'>";
                           echo"<label>Total No. of Seats</label>";
                           echo"<p style='color:yellow;'>$i</p>";
                           echo"</div>";

                           echo"<div class='col-md-6 form-it'>";
                           echo"<label>Childrens Age Between</label>";
                           echo"<p style='color:yellow;'>$j</p>";
                           echo"</div>";

                           echo"<div class='col-md-6 form-it'>";
                           echo"<label>Cinema Location</label>";
                           echo"<p style='color:yellow;'>$k</p>";
                           echo"</div>";

                           echo"<div class='col-md-6 form-it'>";
                           echo"<label>City</label>";
                           echo"<p style='color:yellow;'>$l</p>";
                           echo"</div>";

                           echo"<div class='col-md-6 form-it'>";
                           echo"<label>Booking Date</label>";
                           echo"<p style='color:yellow;'>$date</p>";
                           echo"</div>";

                           echo"<div class='col-md-6 form-it'>";
                           echo"<label>Your Total Amount is</label>";
                           if($j == "3 to 12")
                                {
                                $child = $g * 500;
                                $off = $child * 0.50 ;
                                $adult = $h * 700;
                                $Amount = $child + $adult ;
                                $discount = $off + $adult;
                           echo"<p style='color:yellow;'>$Amount</p>";
                           echo"<label>Your Discount Amount is</label>";
                           echo"<p style='color:yellow;'>$discount</p>";

                                }
                            else if ($j == "13 to 18")
                            {
                                $child = $g * 500;
                                $adult = $h * 700;
                                $Amount = $child + $adult ;
                           echo"<p style='color:yellow;'>$Amount</p>";
                            }
                           echo"</div>";
                           echo "<div class='row'>
                           <div class='col-md-2'>
                           <a href='Billing.php'>
                           <input type='submit' name='btn' class='submit' value='Pay Now'></a>
                           </div>
                       </div>";
                           echo"</div>";
                           echo"</div>";
                           echo"</div>";
                           echo"</div>";
                           echo"</div>";
                           echo"</div>";
                          
include("Footer.php");
?>
</body>
</html>