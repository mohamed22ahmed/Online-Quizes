<?php session_start();
include("user_testLogin.php"); ?>
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
		                <h3 style="text-align: center;color:gray;"><strong>User</strong></h3>
		            </div>
					<div class="l-part">
						<form action="" method="post">
							<input type="email" name="email" placeholder="Email" required class="form-control input-md" autocomplete="off"><br>
							<input type="password" name="pass" placeholder="Password" required class="form-control input-md" autocomplete="new-password"><br>
							<input type="text" name="class" placeholder="Class" required class="form-control input-md" autocomplete="off"><br>
		                    <a style="text-decoration:none;margin-left: 78%;color: #187FAB; font-weight:bold;font-size:16px;" href="admin.php">Login as Admin</a>
							<center><button id="signin" class="btn btn-info btn-lg" name="login">Login</button></center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
