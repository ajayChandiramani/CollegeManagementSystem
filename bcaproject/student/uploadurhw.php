<?php
$a=$_POST['eno'];
$id=$_POST['id'];
$b=$_POST['name'];
$uniq=rand().$b.'['.$a.']'.'.pdf';
$file_name=$_FILES['hw']['name'];
$file_tmp=$_FILES['hw']['tmp_name'];
$folder="studentpic/".$uniq;
$l=$folder;

$con=mysqli_connect("localhost","root","","bcapro");
$sql="insert into studenthw values(default,'$a','$l')";
$run=mysqli_query($con,$sql) or die("<h1 style='color:red'>something went wrong!! ".mysqli_errno($con)."</h1><h2>enrolment number already exisis</h2>");
if($run)
{
    echo "<form method='post' action='uploadmyhw.php'>";
    echo "<input type='hidden' value='$id' name='id'>";
    echo "Successfully insert data <input type='submit' value='click me tho back' name='sub'><br>";
     
    echo "</form>";
    echo "Your application id ".mysqli_insert_id($con);

}
$date=date("Y-m-d");
?>
