<?php
    include('connection.php');
    if(isset($_POST['add'])){
        $chapter = htmlentities(mysqli_real_escape_string($con, $_POST['chapter']));
        $set_time = htmlentities(mysqli_real_escape_string($con, $_POST['set_time']));
        $class = htmlentities(mysqli_real_escape_string($con, $_POST['class']));
        $query="SELECT * FROM quiz WHERE quiz_name='$chapter' && quiz_class='$class'";
        $query=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($query))
            $id=$row['quiz_id'];
        $query=mysqli_num_rows($query);
        if($query==1){
            $q="UPDATE quiz SET quiz_time='$set_time' WHERE quiz_id='$id'";
            $q=mysqli_query($con,$q);
            header('refresh:0;url=adminlogin.php');
        }
        else{
            echo"<script>alert('your entry data is wrong')</script>";
            exit();
        }
    }
?>
