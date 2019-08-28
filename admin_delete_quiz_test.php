<?php
    include('connection.php');
    if(isset($_POST['delete'])){
        $chapter = htmlentities(mysqli_real_escape_string($con, $_POST['chapter']));
        $class = htmlentities(mysqli_real_escape_string($con, $_POST['class']));
        $q="DELETE FROM quiz WHERE quiz_name='$chapter' AND quiz_class='$class'";
        $q=mysqli_query($con,$q);
        $entered=mysqli_affected_rows($con);
        if($entered==1)
            header('refresh:0;url=admin_make_quiz.php');
    }
?>
