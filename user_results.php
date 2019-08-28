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
                echo "<table width='100%' border='1' style='padding:5px;'>";
                echo"
                    <tr>
                        <th style='text-align:center;'>Quiz Name</th>
                        <th style='text-align:center;'>Quiz Degree</th>
                    </tr>
                ";
                $id=$_SESSION['userid'];
                $t="SELECT * FROM quiz ORDER BY quiz_name ASC";
                $t=mysqli_query($con,$t);
                while($z=mysqli_fetch_array($t)){
                    $pp=$z['quiz_name'];
                    $quizxid=$z['quiz_id'];
                    $qzdegree="SELECT degree FROM quiz_user_rel WHERE quiz_id='$quizxid' AND user_id='$id'";
                    $qzdegree=mysqli_query($con,$qzdegree);
                    while($row=mysqli_fetch_array($qzdegree)){
                        $deg=$row['degree'];
                        echo "
                            <tr>
                                <td>$pp</td>
                                <td>$deg</td>
                            </tr>
                        ";
                    }
                }
                echo "</table><br>";
            ?>
        </div></center>
        <!-- End content-->

    </body>
</html>
