<?php
    include('connection.php');

    if(isset($_POST['login'])){
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));
        $query="SELECT * FROM users WHERE email='$email' AND password='$pass' AND status='2'";
        $query=mysqli_query($con,$query);
        $query=mysqli_num_rows($query);
        if($query==1){
            //if this email and password found : open the admin loogin page
            $_SESSION['email']=$email;
            header('location:adminlogin.php');
        }
        else
            echo"<script>alert('Your Email or Password is incorrect')</script>";
    }
?>
