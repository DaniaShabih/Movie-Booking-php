<?php
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
				
					<ul class="breadcumb">
						<li class="active"><a href="Index.php">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Change Password</li>
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
							<li><a href="userfavoritelist.html">Favorite movies</a></li>
							<li><a href="userrate.html">Rated movies</a></li>
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
					<form action="" method="post">
						<h4>CHANGE PASSWORD</h4>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Current Password</label>
								<input type="password" name="cpswrd">
							</div>
							<div class="col-md-6 form-it">
                            <label>New Password</label>
                            <input type="password" name="npswrd">
							</div>
							<div class="col-md-6 form-it">
                            <label>Retype Password</label>
                            <input type="password" name="repswrd">
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
							
								<input type="submit" name="btn" class="submit" value="Change">
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
        include("Connection.php");
        
        if(isset($_POST["btn"]))
        {
            $currentpswd = $_POST["cpswrd"];
            $newpswd = $_POST["npswrd"];
            $confirmpswd = $_POST["repswrd"];
            $name = $_SESSION["name"];

            $fetchrecord = "select * from user where Name = '$name'";
            $execue = mysqli_query($con,$fetchrecord);

            $converted_array = mysqli_fetch_array($execue);
            $id = $converted_array[0];
            $oldpswd = $converted_array[3];

            if ($currentpswd == $oldpswd) {
                if ($newpswd == $confirmpswd) 
                {
                    $update_pswd = "Update user set Password = '$newpswd' where Id = $id";
                    $run = mysqli_query($con,$update_pswd);
                } 
                else {
                echo "<script>alert('Confirm Password is not equal to New Password');</script>"; 
                }
                
            } 
            else {
               echo "<script>alert('Incorrect Password');</script>"; 
            }
            

        }
?>



