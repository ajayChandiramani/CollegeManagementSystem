<?php
$a=$_POST['enno'];
$b=$_POST['fname'];
$c=$_POST['lname'];
$d=$_POST['mname'];
$e=$_POST['addr'];
$f=$_POST['gen'];
$g=$_POST['birdate'];
$h=$_POST['age'];
$i=$_POST['mob'];
$j=$_POST['course'];
$k=$_POST['sem'];
$z=$_POST['unm'];
$x=$_POST['pass'];
$uniq=time().uniqid(rand()).'.jpg';
$file_name=$_FILES['image']['name'];
$file_tmp=$_FILES['image']['tmp_name'];
$folder="studentpic/".$uniq;
$l=$folder;
$con=mysqli_connect("localhost","root","","bcapro");
$sql="INSERT INTO stud VALUES (default,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$z','$x')";
$run=mysqli_query($con,$sql) or die("<h1 style='color:red'>something went wrong!! ".mysqli_errno($con)."</h1><h2>enrolment number already exisis</h2>");
if($run)
{
echo "Successfully insert data <a href='vkm1.php'>Click here to add more 
records</a><br>";
echo "Your application id ".mysqli_insert_id($con);

move_uploaded_file($file_tmp,"studentpic/".$uniq);
}
$date=date("Y-m-d");
$z="P";
$sql="insert into attendance values(default,'$date','$a','$b','$i','$z')";
$run=mysqli_query($con,$sql) or die("<h1 style='color:red'>something went wrong!! ".mysqli_errno($con)."</h1>");

?>
