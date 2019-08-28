<?php
    include('connection.php');
    if(isset($_POST['login'])){
        $question = htmlentities(mysqli_real_escape_string($con, $_POST['question']));
        $query="SELECT * FROM content_question WHERE question='$question'";
        $query=mysqli_query($con,$query);
        $query=mysqli_num_rows($query);
        if($query){
            $q="DELETE FROM content_question WHERE question='$question'";
            $q=mysqli_query($con,$q);
            header('refresh:0;url=admin_make_quiz.php');
        }
        else{
            echo"<script>alert('This Question is not found')</script>";
            exit();
        }
    }
?>
