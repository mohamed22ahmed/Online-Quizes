<?php session_start() ?>
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
        .degree{
            width:50%;
            text-align: center;
        }
    </style>
    <body>

        <!--Start Header -->
        <div class="row">
        	<div class="col-sm-12">
        		<div class="well">
        			<center><h1 style="color: white;">Online Quizes</h1></center>
                    <center><h3 style="color: #e1eaea;">Ahmed Abu-Khater</h3></center>
                    <center><h4 style="color: #b3cccc;"><span style="color: black;">Designed by</span> Mohamed Hammam</h4></center>
        		</div>
        	</div>
        </div>
        <!--End Header -->

        <!-- Start content-->
        <center>
        <div class="degree">
            <?php
                include('connection.php');
                $class = $_SESSION['class'];
                $q="SELECT * FROM users WHERE status='1' AND class='$class'";
                $q=mysqli_query($con,$q);
                echo "<table width='100%' border='1' style='padding:5px;'>";
                echo"
                    <tr>
                        <th style='text-align:center;'>Student Name</th>
                        <th style='text-align:center;'>Quiz Name</th>
                        <th style='text-align:center;'>Quiz Degree</th>
                    </tr>
                ";
                
                while($row=mysqli_fetch_array($q)){
                    $id=$row['id'];
                    $name=$row['name'];
                    $t="SELECT * FROM quiz ORDER BY quiz_name DESC";
                    $t=mysqli_query($con,$t);
                    while($z=mysqli_fetch_array($t)){
                        $pp=$z['quiz_name'];
                        $test=$z['quiz_id'];
                        $w="SELECT * FROM quiz_user_rel WHERE quiz_id='$test'AND user_id='$id' ORDER BY degree DESC";
                        $w=mysqli_query($con,$w);
                        while($r=mysqli_fetch_array($w)){
                            $degree=$r['degree'];
                            echo"
                                <tr>
                                    <td>$name</td>
                                    <td>$pp</td>
                                    <td>$degree</td>
                                </tr>
                            ";
                            
                        }
                    }
                    
                }
                echo "</table><br>";
            ?>
        </div></center>
        <!-- End content-->

    </body>
</html>
