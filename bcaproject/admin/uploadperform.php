//uploadperform.php
<?php

$a=$date=date("d-m-Y");
$b=$_POST['subdate'];
$c=$_POST['course'];
$d=$_POST['subject'];
$e=$_POST['discri'];
$con=mysqli_connect("localhost","root","","bcapro");
$sql="INSERT INTO hw VALUES (default,'$a','$b','$c','$d','$e')";
$run=mysqli_query($con,$sql) or die("<h1 style='color:red'>something went wrong!! ".mysqli_errno($con)."</h1><h2>enrolment number already exisis</h2>");
if($run)
{
echo "<h1>Successfully Upload HomeWork <br><a href='upload.php'>Click me to return</a></h1><br>";

}

?>
