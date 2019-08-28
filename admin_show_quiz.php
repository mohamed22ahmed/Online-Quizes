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
                //if(isset($_POST['login'])){
                    $id=$_SESSION['xx'];
                    $t="SELECT * FROM content_word WHERE quiz_id = '$id'";
                    $t=mysqli_query($con,$t);
                    $qqq=0;
                    echo "<table border='1' width='50%'>";
                    while($z=mysqli_fetch_array($t)){
                        //show degrees as a table
                            $wordx=$z['word'];
                            $correctx=$z['correct1'];
                            $correcty=$z['correct2'];

                            echo "
                                <tr width='50%'>
                                    <td width='70%' >$wordx</td>
                                    <td><input type='text' disabled></td>
                            ";
                            if($qqq%2!=0)
                                echo "</tr>";
                            $qqq++;
                    }
                    echo "</table><br>";

                    $tquestion="SELECT * FROM content_question WHERE quiz_id='$id'";
                    $t=mysqli_query($con,$tquestion);
                    $qw=1;
                    echo"<table width='100%'>";
                    while($z=mysqli_fetch_array($t)){
                        //show degrees as a table
                            $questionx=$z['question'];
                            $choose1=$z['choose1'];
                            $choose2=$z['choose2'];
                            $choose3=$z['choose3'];
                            $choose4=$z['choose4'];
                            $correct=$z['correct'];
                            $rq='question'.$qw;
                            echo "
                                <tr width='100%' style='font-size:18px;'>
                                    <th>$qw. $questionx</th>
                                </tr>
                                <tr width='50%' style='font-size:16px;'>
                                    <td width='50%' style='text-align:left;'><input type='radio' disabled name='$rq' value='$choose1'>$choose1
                                    <td width='50%' style='text-align:left;'><input type='radio' disabled name='$rq' value='$choose1'>$choose2
                                </tr>
                                <tr style='font-size:16px;'>
                                    <td width='50%' style='text-align:left;'><input type='radio' disabled name='$rq' value='$choose1'>$choose3
                                    <td width='50%' style='text-align:left;margin-bottom:20px;'><input type='radio' disabled name='$rq' value='$choose1'>$choose4
                                </tr>
                            ";
                            $qw++;
                    }
                    echo"</table>";
                //}


            ?>
        </div></center>
        <!-- End content-->

    </body>
</html>
