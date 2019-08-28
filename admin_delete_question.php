<?php session_start();
include("admin_delete_question_test.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
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
			width: 30%;
			border-radius: 30px;
	        margin-top: 10px;
		}
	</style>
	<body>

		<!--start Header-->
        <div class="row">
        	<div class="col-sm-12">
        		<div class="well">
        			<center><h1 style="color: white;">Online Quizes</h1></center>
                    <center><h3 style="color: #e1eaea;">Ahmed Abu-Khater</h3></center>
                    <center><h4 style="color: #b3cccc;"><span style="color: black;">Designed by</span> Mohamed Hammam</h4></center>
        		</div>
        	</div>
        </div>
        <!-- End Header -->

		<!-- start Content -->
		<div class="row">
			<div class="col-sm-12">
				<div class="main-content">
					<!-- start Definition of page -->
					<div class="header">
		                <h3 style="text-align: center;color:gray;"><strong>Delete Question</strong></h3>
		            </div>
					<!-- end Definition of page -->

					<!-- start input fields question & choices and correct answer -->
					<div class="l-part">
						<form action="" method="post">
							<input type="text" name="question" placeholder="Question" required class="form-control input-md" autocomplete="off"><br>
                            <center><button id="signin" class="btn btn-info btn-lg" name="login">Delete</button></center>
							<!-- end input fields email and password -->
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- End content -->
	</body>
</html>
