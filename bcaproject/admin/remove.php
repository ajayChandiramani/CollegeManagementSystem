<?php
include "./head.php";
$a=$_GET['id'];
$con=mysqli_connect("localhost","root","","bcapro");
$dsql="delete from stud where id=$a";
//$sql="delete from attendance where enno=$a";

$drun=mysqli_query($con,$dsql);

$run=mysqli_query($con,$sql);
if($run)
{   
    echo "<h1>";
    echo "Successfully Remove Student<br><a href='student.php'>Click me to back</a>";
    echo "</h1>";

}
?>