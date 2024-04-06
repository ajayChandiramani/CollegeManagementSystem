<?php
include "./head.php";
$a=$_GET['id'];
$con=mysqli_connect("localhost","root","","bcapro");
$sql="delete from teacherinfo where id=$a";
$run=mysqli_query($con,$sql);
if($run)
{   
    echo "<h1>";
    echo "Successfully Remove Teacher<br><a href='teacherinfo.php'>Click me to back</a>";
    echo "</h1>";

}
?>