<?php session_start();
?>
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
			width: 40%;
			height: 40%;
			margin: 10px auto;
			background-color: #fff;
			border: 2px solid #e6e6e6;
			padding: 40px 50px;
		}
		.header{
			border: 0px solid #000;
			margin-bottom: 10%;
		}
		.well{
			background-color: #187FAB;
		}
        .a1{
            color:white;
            font-size: 20px;
            font-weight: bold;
        }
        a:hover{
            text-decoration: none;
        }
        #d1{
            font-size: 20px;
            float:right;
            top:0;
            width:120px;
            padding: 10px;
            background-color: #669999;
            margin-right: 20px;
            text-align: center;
            color:white;
            border-radius: 15px;
        }
        #signin{
			width: 30%;
            font-size: 20px;
			border-radius: 20px;
	        margin-top: 90px;
            padding: 10px;
            font-weight: bold;
            color: white;
            background-color:#187FAB;
		}
	</style>
	<body onload="startInt()">

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
        <div id="d1">

        </div>
        <form action="auto_correction.php" method="post">
            
            
            <?php
                include('connection.php');
    
                $class=$_SESSION['userclass'];
                $x=$_GET['name'];
                $qn=explode("?", $x);
                $x=$qn[0];
                $q="SELECT * FROM quiz WHERE quiz_name='$x' AND quiz_class='$class'";
                $q=mysqli_query($con,$q);
                while($row=mysqli_fetch_array($q))
                    $id=$row['quiz_id'];
                $_SESSION['memo']=$id;
                $t="SELECT * FROM content_word WHERE quiz_id = '$id'";
                $t=mysqli_query($con,$t);
                echo"<div width='70%' style='margin-left:15%;'>";
                echo "<table border='1'>";
                $count=1;
                while($z=mysqli_fetch_array($t)){
                    $wordx=$z['word'];
                    $correctx=$z['correct1'];
                    $correcty=$z['correct2'];
                    echo "
                        <tr >
                            <td width='30%' style='text-align:center'>$wordx</td>
                            <td><input type='text' size='50%' name='inp$count'></td>
                    ";
                    $count++;
                    echo "</tr>";
                }
                $_SESSION['count']=$count;
                echo "</table><br><br><br>";
                $tquestion="SELECT * FROM content_question WHERE quiz_id='$id'";
                $t=mysqli_query($con,$tquestion);
                $qw=1;echo"</div><div width='70%' style='margin-left:15%;'>";
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
                                <td width='50%' style='text-align:left;padding-left:20px;'><input type='radio' name='$rq' value='$choose1'>$choose1
                                <td width='50%' style='text-align:left;padding-left:20px;'><input type='radio' name='$rq' value='$choose2'>$choose2
                            </tr>
                            <tr style='font-size:16px;'>
                                <td width='50%' style='text-align:left;padding-left:20px;'><input type='radio' name='$rq' value='$choose3'>$choose3
                                <td width='50%' style='text-align:left;padding-left:20px;'><input type='radio' name='$rq' value='$choose4'>$choose4
                            </tr>
                        ";
                        $qw++;
                }
                $_SESSION['qw']=$qw;
                echo"</table></div>";
            ?>
            <center><input type="submit" name="sub" id="signin" value="Submit"></center>
        </form>
		<!-- End content -->

        <script>
            var c=location.search.split('=')[2];
            c=parseInt(c);
            var t,r;
            r=59,c--;
            function timedCount()
            {
                if(c<=9){
                    document.getElementById('d1').innerHTML='0';
                    document.getElementById('d1').innerHTML+=c;
                }
                else{
                    document.getElementById('d1').innerHTML=c;
                }
                document.getElementById('d1').innerHTML+=':';
                if(r<=9)
                    document.getElementById('d1').innerHTML+='0';
                document.getElementById('d1').innerHTML+=r;

                if(r==0)
                    r=59,c--;
                if(c<0){
                    open('auto_correction.php');
                    stopCount();
                }
                r--;
            }
            function startInt()
            {
                t = setInterval(timedCount,1000);
            }
            function stopCount()
            {
                clearInterval(t);
            }
        </script>
	</body>
</html>
