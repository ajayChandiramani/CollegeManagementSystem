<?php
include "./head.php";
$a=$_GET['id'];
$con=mysqli_connect("localhost","root","","bcapro");
$sql="delete from tt where id=$a";
//$dsql="delete from attendance where enno=$a";

//$drun=mysqli_query($con,$dsql);;fljsc


$run=mysqli_query($con,$sql);
if($run)
{   
    echo "<h1>";
    echo "Successfully Remove Student<br><a href='timetable.php'>Click me to back</a>";
    echo "</h1>";

}
$sql="delete from attendance where enno=$a";
?>