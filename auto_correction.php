<?php
    session_start();
    include('connection.php');
    $userid=$_SESSION['userid'];
    $quizid=$_SESSION['memo'];
    $mx="SELECT * FROM quiz_user_rel WHERE user_id='$userid' AND quiz_id='$quizid'";
    $mx=mysqli_query($con,$mx);
    $mmm=mysqli_num_rows($mx);
    if($mmm){
        echo"<script>alert('you cant take this quiz twice')</script>";
        echo "<script> location.href='http://173.231.208.139/~mrahmed/userlogin.php'; </script>";
        exit;
        //header('refresh:0;url=userlogin.php');
    }else{
        $t="SELECT * FROM content_word WHERE quiz_id = '$quizid'";
        $t=mysqli_query($con,$t);
        $count=0;
        $r=1;
        while($z=mysqli_fetch_array($t)){
            $correctx=$z['correct1'];
            $correcty=$z['correct2'];
            $xx='inp'.$r;
            if($_POST[$xx]==$correctx||$_POST[$xx]==$correcty)
                $count++;
            $r++;
        }
        $tquestion="SELECT * FROM content_question WHERE quiz_id='$quizid'";
        $t=mysqli_query($con,$tquestion);
        $qw=1;
        while($z=mysqli_fetch_array($t)){
                $correct=$z['correct'];
                $rq='question'.$qw;
                if(isset($_POST[$rq])){
                    if($_POST[$rq]==$correct)
                        $count++;
                }
                $qw++;
        }
        $mx="INSERT INTO quiz_user_rel(user_id,quiz_id,degree) VALUES ('$userid','$quizid','$count')";
        $mx=mysqli_query($con,$mx);
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>User</title>
		<meta charset="utf-8">
	 	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<style>
		body{
			overflow-x: hidden;
		}
		.main-content{
			width: 50%;
			height: 40%;
			margin: 10px auto;
			background-color: #fff;
			border: 2px solid #e6e6e6;
			padding: 40px 50px;
		}
		.header{
			border: 0px solid #000;
			margin-bottom: 10px;
		}
		.well{
			background-color: #187FAB;
		}
		#signin{
			width: 60%;
			border-radius: 30px;
	        margin-top: 30px;
		}
        a:hover{
            text-decoration: none;
        }
        .d2{
            padding: 5px;
            font-size: 30px;
            color:white;
            background-color: #187FAB;
            border-radius: 8px;
            border: 1px solid black;
            width: 8%;
            margin-left: 46%;
            margin-top: 5%;
            margin-bottom: 5%;
        }
	</style>
	<body>
		<div class="row">
        	<div class="col-sm-12">
        		<div class="well">
        			<center><h1 style="color: white;">Online Quizes</h1></center>
                    <center><h3 style="color: #e1eaea;">Ahmed Abu-Khater</h3></center>
                    <center><h4 style="color: #b3cccc;"><span style="color: black;">Designed by</span> Mohamed Hammam</h4></center>
        		</div>
        	</div>
        </div>
        <h2 style="text-align:center">Your degree is..</h2>
        <div class="d2">
            <center><?php echo $count; ?></center>
        </div>
        <center><h3><a href="userlogin.php" style="font-size:50px;">Home</a></h3></center>
    </body>
</html>
