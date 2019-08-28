<?php
    include('connection.php');
    if(isset($_POST['login'])){
        $question = htmlentities(mysqli_real_escape_string($con, $_POST['question']));
        $choose1 = htmlentities(mysqli_real_escape_string($con, $_POST['choose1']));
		$choose2= htmlentities(mysqli_real_escape_string($con, $_POST['choose2']));
        $choose3= htmlentities(mysqli_real_escape_string($con, $_POST['choose3']));
        $choose4= htmlentities(mysqli_real_escape_string($con, $_POST['choose4']));
        $correct= htmlentities(mysqli_real_escape_string($con, $_POST['correct']));
        $id=$_SESSION['chapter_id'];
        $query="INSERT INTO content_question(quiz_id,question,choose1,choose2,choose3,choose4,correct) VALUES ('$id','$question','$choose1','$choose2','$choose3','$choose4','$correct')";
        $query=mysqli_query($con,$query);
        $query=mysqli_affected_rows($con);
        if($query>0){
            header('refresh:0;url=admin_add_question.php');
        }
    }
?>
