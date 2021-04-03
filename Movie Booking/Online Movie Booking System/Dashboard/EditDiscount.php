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
    $query = mysqli_query($con,"select * from discount where Id = $fetch");
    $record = mysqli_fetch_array($query);
?>
<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                        <h3 style="font-family:'Times New Roman', Times, serif; color:white; text-align:center;">EDIT DISCOUNT</h3>

                            <div class="form-group">
                            <h5>Age</h5>
                            <input type="text" name="age" class="form-control" value="<?php echo $record[1]; ?>">
                            </div>
                            <div class="form-group">
                            <h5>Discount</h5>
                                <input type="text" name="disc" class="form-control" value="<?php echo $record[2]; ?>">
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
	$a = $_POST["age"];
	$b = $_POST["disc"];
	
	
	
	$update = "update discount SET Age='$a',Discount='$b' WHERE Id = $fetch";
	
	$run = mysqli_query($con, $update);
	echo '<script>  alert("Edited Successfully");   </script>';
	echo '<script> window.location="ViewDiscount.php";</script>';
	
}
?>
</body>

</html>

