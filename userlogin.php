<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
    	<title>User Login</title>
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
        .well{
    		background-color: #187FAB;
    	}
        .d1{
            float: left;
            margin-left: 40%;
            margin-bottom: 5%;
            font-size: 30px;
        }
        a:hover{
            text-decoration: none;
            color:gray;
        }
        #signin{
    		width: 20%;
    		border-radius: 30px;
            font-size: 25px;
            margin-bottom: 2%;
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
        <div class="l-part">
            <form action="user_results.php" method="post">
                <center><button id="signin" class="btn btn-info btn-lg" name="login">Show Degrees</button></center>
            </form>
        </div>
        <div class="d1">
            <h1>Exams :</h1>
            <ul>
                <?php
                    include('connection.php');
                    $class = $_SESSION['userclass'];
                    $q="SELECT * FROM quiz WHERE quiz_class='$class' ORDER BY quiz_name ASC";
                    $q=mysqli_query($con,$q);
                    while($row=mysqli_fetch_array($q)){
                        $name=$row['quiz_name'];
                        $time=$row['quiz_time'];
                        echo "<li><a href='user_show_exam.php?name=$name?time=$time'>$name</a></li>";
                    }
                ?>
            </ul>
        </div>
    </body>
</html>
