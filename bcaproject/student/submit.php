<?php

$a=$_POST['unm'];
$b=$_POST['fname'];
$c=$_POST['lname'];
$d=$_POST['cont'];
$e=$_POST['feed'];
$f=$_POST['slid'];
$con=mysqli_connect("localhost","root","","bcapro");
$sql="INSERT INTO feedback VALUES (default,'$a','$b','$c','$d','$e','$f')";
$run=mysqli_query($con,$sql) or die("<h1 style='color:red'>something went wrong!! ".mysqli_errno($con)."</h1><h2>enrolment number already exisis</h2>");
if($run)
{
echo "Successfully submited feedback <a href='feedback.php'>Click here to back</a><br>";
}

?>
