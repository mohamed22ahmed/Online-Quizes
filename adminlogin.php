<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
    	<title>Admin Login</title>
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
    	#signin{
    		width: 25%;
    		border-radius: 50px;
            margin-right: 30px;
            margin-left: 30px;
            margin-top: 35px;
    	}
        #signinx{
    		width: 35%;
    		border-radius: 50px;
            margin-right: 30px;
            margin-left: 30px;
            margin-top: 35px;
    	}
        .homedesign{
            width:70%;
            text-align: center;
            margin-top: 4%;
            margin-left: 15%;
            border: 2px solid #e6e6e6;
            padding: 30px;
        }
        .a1{
            color:white;
            text-decoration: none;
            font-weight: bold;
            font-size: 25px;
        }
        .a1:hover{
            text-decoration: none;
            color: #b3cccc;
        }
    </style>
    <body>
        <!-- start header -->
        <div class="row">
        	<div class="col-sm-12">
        		<div class="well">
        			<center><h1 style="color: white;">Online Quizes</h1></center>
                    <center><h3 style="color: #e1eaea;">Ahmed Abu-Khater</h3></center>
                    <center><h4 style="color: #b3cccc;"><span style="color: black;">Designed by</span> Mohamed Hammam</h4></center>
        		</div>
        	</div>
        </div>
        <!-- end header -->

        <!-- start content -->
        <div class="homedesign">
            <button id="signin" class="btn btn-info btn-lg"><a class="a1" href="admin_add_student.php">Add Student</a></button>
            <button id="signin" class="btn btn-info btn-lg"><a class="a1" href="admin_delete_student.php">Delete Student</a></button>
            <button id="signin" class="btn btn-info btn-lg"><a class="a1" href="admin_class_result.php">Show Result</a></button><br>
            <button id="signin" class="btn btn-info btn-lg"><a class="a1" href="admin_set_timer.php">Set Timer</a></button>
            <button id="signin" class="btn btn-info btn-lg"><a class="a1" href="admin_make_quiz.php">Make Quiz</a></button>
            <button id="signin" class="btn btn-info btn-lg"><a class="a1" href="admin_show_quizes.php">Show Quizes</a></button><br>
            <button id="signinx" class="btn btn-info btn-lg"><a class="a1" href="admin_change_password.php">Change password</a></button><br>
        </div>
        <!-- end content -->

    </body>
</html>
