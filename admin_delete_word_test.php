<?php
    include('connection.php');
    if(isset($_POST['login'])){
        $word = htmlentities(mysqli_real_escape_string($con, $_POST['word']));
        $query="SELECT * FROM content_word WHERE word='$word'";
        $query=mysqli_query($con,$query);
        $query=mysqli_num_rows($query);
        if($query==1){
            $q="DELETE FROM content_word WHERE word='$word'";
            $q=mysqli_query($con,$q);
            header('refresh:0;url=admin_make_quiz.php');
        }
        else{
            echo"<script>alert('This word is not found')</script>";
            exit();
        }
    }
?>
