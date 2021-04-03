<?php
include("Connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>.spanclass{
	color:yellow;
 } </style>
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
						<li> <span class="ion-ios-arrow-right"></span>Payment</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

           
<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="form-style-1 user-pro" action="#">
					<form action="#" method="post">	
                        <h4>Payment</h4>
                        <label>Accepted Cards</label>
                        <div class="icon-container">
                        <i class="fa fa-cc-visa fa-lg fa-2x"  style="color:navy;"></i>
                        <i class="fa fa-cc-amex fa-lg fa-2x" style="color:blue;"></i>
                        <i class="fa fa-cc-mastercard fa-lg fa-2x" style="color:red;"></i>
                        <i class="fa fa-cc-discover fa-lg fa-2x" style="color:orange;"></i>
                        </div>
                        <br>
                        <div class="row">
							<div class="col-md-6 form-it">
                        <label>Name on Card</label>
                        <input type="text"  name="cardname" placeholder="John More Doe" required>
                        </div>
                        <div class="col-md-6 form-it">
                        <label>Credit card number</label>
                        <input type="text"  name="cardnumber" placeholder="1111-2222-3333-4444" required>
                        </div>
                        <div class="col-md-6 form-it">
                        <label>Exp Month</label>
                        <input type="text"  name="expmonth" placeholder="September" required>
                        </div>
                        <div class="col-md-6 form-it">
                        <label>Exp Year</label>
                        <input type="text" name="expyear" placeholder="2018" required>
                        </div>
                        <div class="col-md-6 form-it">
                        <label>CVV</label>
                        <input type="text" name="cvv" placeholder="352" required>
                        </div>
                        <div class="col-md-6 form-it">
                        <label>
                        <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                        </label>
                        </div>
						
						<div class="row">
							<div class="col-md-2">							
							<input type="submit" name="btn" class="submit" value="Pay">							
							</div>
						</div></div>	</div>
						</form>
				</div></div>
 
<div class="page-single">
	<div class="container-fluid">
		<div class="row ipad-width">
        <div class="col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar">	
						<form class="form-style-1 user-pro" action="#">
							<div class="row">
								<div class="col-md-12 form-it">
									<label style='font-size:18px;'>Total No. of Tickets</label>
									<?php									
                                    echo 
									"<h3><span class='spanclass'>" .
									$_SESSION["seats"]??"" . "</span></h3>" ;

                                    ?>
								</div>
								<div class="col-md-12 form-it">
									<label style='font-size:18px;'>Total Price</label>
									<?php
									echo
									"<h3><span class='spanclass'>" .
									 $_SESSION["price"]??"" . "</span></h3>";
                                    ?>
									</div>	
								<div class="col-md-12 form-it">
									<label style='font-size:18px;'>Discount Price</label>
									<?php
									echo
									"<h3><span class='spanclass'>" .
									$_SESSION["dprice"]??"" . "</span></h3>";
                                    ?>
								</div>
							</div>
						</form>
    </div></div>
    </div></div></div>	
		
<?php
include("Footer.php");
?>



</body>
</html>
<?php
if(isset($_POST["btn"])){
	$a = $_POST["cardname"];
	$b = $_POST["cardnumber"];
	$c = $_POST["expmonth"];
	$d = $_POST["expyear"];
	$e = $_POST["cvv"];
	
	$insert = "INSERT INTO checkout(Name, CardNo, ExpMonth, ExpYear, Cvv) 
	VALUES('$a','$b','$c','$d','$e')";
	$run = mysqli_query($con, $insert);
	echo '<script>  alert("Payment Successful");   </script>';
	echo '<script> window.location="MoviesGrid.php";</script>';

	
}
?>



