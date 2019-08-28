<?php
    include('connection.php');
    if(isset($_POST['login'])){
        $quizx = htmlentities(mysqli_real_escape_string($con, $_POST['quizx']));
        $q_class = htmlentities(mysqli_real_escape_string($con, $_POST['quizclass']));
        $query="SELECT * FROM quiz WHERE quiz_name='$quizx' AND quiz_class='$q_class'";
        $query=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($query))
            $id=$row['quiz_id'];
        $_SESSION['xx']=$id;
        header('refresh:0;url=admin_show_quiz.php');
    }
?>
