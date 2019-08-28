<?php
    include('connection.php');
    if(isset($_POST['login'])){
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));
        $class = htmlentities(mysqli_real_escape_string($con, $_POST['class']));
        if($class==1||$class==2||$class==3){
            $query="SELECT * FROM users WHERE email='$email' AND password='$pass' AND class='$class' AND status='1'";
            $query=mysqli_query($con,$query);
            $q=mysqli_num_rows($query);
            while($row=mysqli_fetch_array($query)){
                $_SESSION['userid']=$row['id'];
            }
            $_SESSION['userclass']=$class;
            if($q==1)
                header('location:userlogin.php');
            else
                echo"<script>alert('Your should enter a valid class')</script>";
        }
    }
?>
