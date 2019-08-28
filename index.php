<?php session_start();

?>
<!DOCTYPE html>
<html>
    <head>
    	<title>Home</title>
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
    		width: 20%;
    		border-radius: 50px;
            margin-right: 30px;
            margin-left: 30px;
            margin-top: 35px;
    	}
        .homedesign{
            width:50%;
            text-align: center;
            margin-top: 2%;
            margin-bottom:3%;
            margin-left: 28%;
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

        <!-- Header Design -->
        <div class="row">
        	<div class="col-sm-12">
        		<div class="well">
        			<center><h1 style="color: white;">Online Quizes</h1></center>
                    <center><h3 style="color: #e1eaea;">Ahmed Abu-Khater</h3></center>
                    <center><h4 style="color: #b3cccc;"><span style="color: black;">Designed by</span> Mohamed Hammam</h4></center>
        		</div>
        	</div>
        </div>
        <!-- End of Header -->

        <!-- Content -->
        <div class="homedesign">

            <!-- start Definition of page -->
            <h2>Welcome to English quizes</h2><br>
            <h4 style="font-weight:bold; color:gray;">Choose your account type..</h4>
            <!-- end Definition of page -->

            <!-- start choose type of account -->
            <button id="signin" class="btn btn-info btn-lg" name="login"><a class="a1" href="admin.php">Admin</a></button>
            <button id="signin" class="btn btn-info btn-lg" name="login"><a class="a1" href="user.php">User</a></button>
            <!-- end choose type of account -->
            
        </div>
        <!-- End of content -->
    </body>
</html>
