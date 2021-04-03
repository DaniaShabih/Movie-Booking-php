<?php
include("../Connection.php");


?>
<!DOCTYPE html>

<html lang="en">

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style>
h1{
    font-weight: bold;
    text-decoration: underline;
    color: black;
}
  </style> 
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
                        <form action="#" method="post">
                        <h3 style="font-family:'Times New Roman', Times, serif; color:white; text-align:center;">ADD EMPLOYEE</h3>
                        <br>    
                        <div class="form-group">
                                <h5>Name</h5>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <h5>E-mail</h5>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <h5>Password</h5>
                                <input type="password" name="pass" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <h5>Phone Number</h5>
                                <input type="text" name="phn" class="form-control" required>
                            </div>
                            <div class="row">
						<div class="col-md-4">
                            <br>
                            <button type="submit" name="btn" class="btn btn-primary">Save</button>
                        </div>
						</div></div>
                        </form>
                    </div></div></div>
        <?php
include ("footer.php");
?>
</body>

</html>

<?php
if(isset($_POST["btn"])){
	$a = $_POST["name"];
	$b = $_POST["email"];
	$c = $_POST["pass"];
	$d = $_POST["phn"];
	
    $checkemail = "select * from user where Email = '$b'";
    $run = mysqli_query($con,$checkemail);
    $num =mysqli_num_rows($run);
    
    $insert = "INSERT INTO user(Name, Email, Password, PhoneNumber, Role) 
    VALUES('$a','$b','$c','$d','Admin')";
    $run = mysqli_query($con, $insert);
    echo '<script>  alert("Employee Added Successfully");   </script>';
	echo '<script> window.location="index.php";</script>';
	
}



?>