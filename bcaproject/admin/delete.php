<?php
include "./head.php";
$a=$_GET['en'];
$con=mysqli_connect("localhost","root","","bcapro");
$sql="delete from stud where enno=$a";
//$dsql="delete from attendance where enno=$a";

//$drun=mysqli_query($con,$dsql);

$run=mysqli_query($con,$sql);
if($run)
{   
    echo "<h1>";
    echo "Successfully Remove Student<br><a href='student.php'>Click me to back</a>";
    echo "</h1>";

}
$sql="delete from attendance where enno=$a";
?>