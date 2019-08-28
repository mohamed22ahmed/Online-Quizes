<?php
    session_start();
    include('connection.php');
    if(isset($_POST['show'])){
        $class = htmlentities(mysqli_real_escape_string($con, $_POST['class']));
        $q="SELECT * FROM users WHERE class='$class'";
        $q=mysqli_query($con,$q);
		$_SESSION['class']=$class;
        header('refresh:0;url=admin_show_result.php');
    
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Delete Student</title>
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
		<div class="row">
			<div class="col-sm-12">
				<div class="main-content">

                    <!-- start definition of page -->
					<div class="header">
						<h3 style="text-align: center;"><strong>Results :</strong></h3>
		            </div>
                    <!-- end definition of page -->

                    <!-- enter the class you want to show results of it -->
					<div class="l-part">
						<form action="" method="post">
                            <input type="text" name="class" placeholder="Enter Class" required class="form-control input-md" autocomplete="off"><br>
                            <center><button id="signin" class="btn btn-info btn-lg" name="show">Show Result</button></center>
						</form>
					</div>
				</div>
			</div>
		</div>
        <!-- end content -->
	</body>
</html>
