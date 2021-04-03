<?php
include("Connection.php");
    session_start();
    if(isset($_POST["btn"])){
        $email = $_POST["email"];
        $pswd = $_POST["password"];

        $loginlogin = "select * from user where Email = '$email' and Password= '$pswd'";
        $execute = mysqli_query($con,$loginlogin);
        $num = mysqli_num_rows($execute);
        $myarray = mysqli_fetch_assoc($execute);

        if ($num != 0) {
            $_SESSION["role"] = $myarray["Role"];
            $_SESSION["name"] = $myarray["Name"];
           
            if($_SESSION["role"] == "Admin"){
                header("location:../Online Movie Booking System/Dashboard/index.php");
            }
        
        else {
            header("location:MoviesGrid.php");
        }
    }
    else{
         echo "<script>alert('Invalid Credentials');</script>";
    }
    
}?>