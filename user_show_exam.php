<?php
    session_start();
    include('connection.php');
    $class=$_SESSION['userclass'];
    $xname=$_GET['name'];
    $name=explode('?',$xname)[0];
    $time=explode('?',$xname)[1];
    $time=explode('=',$time)[1];

    $q="SELECT * FROM quiz WHERE quiz_name='$name' AND quiz_class='$class'";
    $q=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($q)){
        $pass=$row['quiz_pass'];
    }
    if(isset($_POST['submit'])){
        if($_POST['pass']==$pass){
            $_SESSION['namequiz']=$name;
            $_SESSION['classquiz']=$class;
            $_SESSION['time']=$time;
            $r='refresh:0;url=user_exam.php?name='.$name.'?time='.$time;
            header($r);
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
    	<title>Show Result</title>
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
		<div class="row">
			<div class="col-sm-12">
				<div class="main-content">
					<div class="header">
						<h3 style="text-align: center;"><strong>Login English Quizes</strong></h3>
		              </div>
					<div class="l-part">
						<form action="" method="post">
							<input type="text" name="pass" placeholder="Quiz Password" required class="form-control input-md" autocomplete="off"><br>
							<center><button id="signin" class="btn btn-info btn-lg" name="submit">Submit</button></center>
						</form>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
