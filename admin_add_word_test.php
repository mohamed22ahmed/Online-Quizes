<?php
    include('connection.php');
    if(isset($_POST['login'])){
        $word = htmlentities(mysqli_real_escape_string($con, $_POST['word']));
        $correct1 = htmlentities(mysqli_real_escape_string($con, $_POST['correct1']));
		$correct2= htmlentities(mysqli_real_escape_string($con, $_POST['correct2']));
        $id=$_SESSION['chapter_id'];
        $query="INSERT INTO content_word(quiz_id,word,correct1,correct2) VALUES ('$id','$word','$correct1','$correct2')";
        $query=mysqli_query($con,$query);
        $query=mysqli_affected_rows($con);
        if($query>0){
            header('refresh:0;url=admin_add_word.php');
        }
    }
?>
