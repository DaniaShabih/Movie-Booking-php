<?php
    include("Connection.php");
    if(isset($_POST["btn"])){
        $a = $_POST["username"];
        $b = $_POST["email"];
        $c = $_POST["password"];
        $d = $_POST["phone"];
        

        $checkemail = "select * from user where Email = '$b'";
        $run = mysqli_query($con,$checkemail);
        $num =mysqli_num_rows($run);
        
        $insert = "INSERT INTO user(Name, Email, Password, PhoneNumber, Role) 
        VALUES('$a','$b','$c','$d','Visitor')";
        $run = mysqli_query($con, $insert);
        header("location:Index.php"); 
        
 }
        

 


?>