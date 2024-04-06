<?php

$num=$_GET['count'];
for($i=0;$i<=$num-1;$i++)
{
    $o=$_POST['date'][$i];
    $a=$_POST['enno'][$i];
    //echo $a."<br>";
    $b=$_POST['fname'][$i];
    //echo $b."<br>";
    $c=$_POST['contno'][$i];
    //echo $c."<br>";
    $d=$_POST['txtab'][$i];
    //echo $d."<br><hr>";
    
    $con=mysqli_connect("localhost","root","","bcapro");
    $selsql="select DISTINCT(date) from attendance";
    $selrun=mysqli_query($con,$selsql) or die("j");
    while($row=mysqli_fetch_assoc($selrun))
    {
        $k=$row['date'];    
    }
    if($o!=$k)
    {
        $sql="INSERT INTO attendance VALUES (default,'$o','$a','$b','$c','$d')";
        $run=mysqli_query($con,$sql) or die("<h1 style='color:red'>something went wrong!! ".mysqli_errno($con)."</h1><h2>enrolment number already exisis</h2>");
    
}
    if($run)
    {
        echo "Successfully insert data <a href='vkm1.php'>Click here to add more records</a><br>";
        echo "Your application id ".mysqli_insert_id($con);
    }
    

?>