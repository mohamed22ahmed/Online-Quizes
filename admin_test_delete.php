<?php
    include('connection.php');
    if(isset($_POST['add'])){
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
        $query="SELECT * FROM users WHERE email='$email'";
        $query=mysqli_query($con,$query);
        $query=mysqli_num_rows($query);
        if($query==1){
            $q="DELETE FROM users WHERE email='$email'";
            $q=mysqli_query($con,$q);
            header('refresh:0;url=adminlogin.php');
        }
        else{
            echo"<script>alert('This account is not found')</script>";
            exit();
        }
    }
?>
