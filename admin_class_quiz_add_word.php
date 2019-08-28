<?php
    session_start();
    include('connection.php');
    if(isset($_POST['add'])){
        $chapter = htmlentities(mysqli_real_escape_string($con, $_POST['chapter']));
        $class = htmlentities(mysqli_real_escape_string($con, $_POST['class']));
        $query="SELECT * FROM quiz WHERE quiz_name='$chapter' && quiz_class='$class'";
        $query=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($query))
            $id=$row['quiz_id'];
        $query=mysqli_num_rows($query);
        if($query==1){
            $_SESSION['chapter_id']=$id;
            header('refresh:0;url=admin_add_word.php');
        }
        else{
            echo"<script>alert('your entry data is wrong')</script>";
            exit();
        }
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
						<h3 style="text-align: center;"><strong>Make Quiz</strong></h3>
		            </div>
                    <!-- end definition of page -->

                    <!-- enter the class you want to show results of it -->
					<div class="l-part">
						<form action="" method="post">
                            <input type="text" name="chapter"  placeholder="Chapter Name" required class="form-control input-md" autocomplete="off"><br>
                            <input type="text" name="class" placeholder="Enter Class" required class="form-control input-md" autocomplete="off"><br>
                            <center><button id="signin" class="btn btn-info btn-lg" name="add">Make quiz</button></center>

                            <!-- This page to check that class is found or not and show results if class is found -->
                            
						</form>
					</div>
				</div>
			</div>
		</div>
        <!-- end content -->
	</body>
</html>
