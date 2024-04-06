<?php
include "./head.php";
$a=$_GET['id'];
$con=mysqli_connect("localhost","root","","bcapro");
$dsql="delete from hw where id=$a";
//$sql="delete from attendance where enno=$a";

$drun=mysqli_query($con,$dsql);

if($drun)
{   
    echo "<h1>";
    echo "Successfully Remove Student<br><a href='upload.php'>Click me to back</a>";
    echo "</h1>";

}
?>