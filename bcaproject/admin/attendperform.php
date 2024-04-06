<?php

$course=$_GET['course'];
$flg="yes";
$absent=0;
$present=0;
$temp="ha";
$con=mysqli_connect("localhost","root","","bcapro");
$sql="select * from $course";
$run=mysqli_query($con,$sql);
$hi=array();    
while($row=mysqli_fetch_assoc($run))
{
    $hi[]=$row['date']; 
}
$date=date("Y-m-d");
if(in_array($date,$hi))
{
 $temp="nai";
}

/*
if(in_array($flg,$hi))
{
    $temp="ha";
}*/
if($temp!="nai")
{
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
    echo $course;     
    //echo $d."<br><hr>";
    if($d=="p"||$d=="P")
    {
        $present++;
    }
    else
    {   
        $absent++;
    }
    $con=mysqli_connect("localhost","root","","bcapro");

    
        $sql="INSERT INTO $course VALUES (default,'$o','$a','$b','$c','$d')";
        $run=mysqli_query($con,$sql) or die("<h1 style='color:red'>something went wrong!! ".mysqli_errno($con)."</h1><h2>enrolment number already exisis</h2>");
}

        if($run)
        {
            echo "<h1 style='color:green'>Total Present Student are .$present......</h1><br>";
            echo "<h1 style='color:red'>Total Absent Student are .$absent</h1>";
        }
    }
    else
    {
        echo "<h1>Something want wrong!!!";
    }
?>