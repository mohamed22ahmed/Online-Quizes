<?php
    include('connection.php');
    if(isset($_POST['add'])){
        $name = htmlentities(mysqli_real_escape_string($con, $_POST['name']));
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));
        $class = htmlentities(mysqli_real_escape_string($con, $_POST['class']));
        $query="SELECT * FROM users WHERE email='$email' AND password='$pass'";
        $query=mysqli_query($con,$query);
        $query=mysqli_num_rows($query);
        if($query==0){
            if($class!=1&&$class!=2&&$class!=3){
                echo"<script>alert('Class should be 1, 2 or 3')</script>";
                exit();
            }
            $q="INSERT INTO users(name,email,password,class)VALUES('$name','$email','$pass','$class')";
            $q=mysqli_query($con,$q);
            $entered=mysqli_affected_rows($con);
            if($entered==1){
                header('refresh:0;url=adminlogin.php');
            }
        }
        else{
            echo"<script>alert('This account has been taken')</script>";
            exit();
        }
    }
?>
