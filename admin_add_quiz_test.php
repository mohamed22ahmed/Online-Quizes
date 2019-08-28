<?php
    include('connection.php');
    if(isset($_POST['add'])){
        $chapter = htmlentities(mysqli_real_escape_string($con, $_POST['chapter']));
        $class = htmlentities(mysqli_real_escape_string($con, $_POST['class']));
        $q="INSERT INTO quiz(quiz_name,quiz_class) VALUES('$chapter','$class')";
        $q=mysqli_query($con,$q);
        $entered=mysqli_affected_rows($con);
        if($entered==1)
            header('refresh:0;url=admin_make_quiz.php');
    }
?>
