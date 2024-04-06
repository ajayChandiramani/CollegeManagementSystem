<?php
$a=$_POST['fname'];
$b=$_POST['mname'];
$c=$_POST['lastname'];
$d=$_POST['addr'];
$e=$_POST['number'];
$f=$_POST['email'];
$g=$_POST['uname'];
$h=$_POST['pass'];

$con=mysqli_connect("localhost","root","","bcapro");
    $sql="INSERT INTO `teacherinfo`(`id`, `fname`, `mname`, `lname`, `addr`, `pnumber`, `email`, `uname`, `pass`) VALUES
     (default,'$a','$b','$c','$d','$e','$f','$g','$h')";
            echo "<h2 style='color:red'>";
                $run=mysqli_query($con,$sql) or die("User name alerdy exist".mysqli_errno($con));
            echo "</h2>";
        if($run)
        {
            echo "Successfully insert data <a href='teacherinfo.php'>Click here to add more records</a><br>";
            echo "Your application id ".mysqli_insert_id($con);
        }  
        else
        {
            echo "username exit!!";
        } 
        ///insert in teacher database
        $dsql="insert into teacher values(default,'$g','$h')";
        echo "<h2 style='color:red'>";
                $drun=mysqli_query($con,$dsql) or die("User teacher  name alerdy exist".mysqli_errno($con));
         echo "</h2>";
        if($run)
        {
            echo "Successfully insert data <a href='teacherinfo.php'>Click here to add more records</a><br>";
            echo "Your application id ".mysqli_insert_id($con);
        }
        else
        {
            echo "username exit!!";
        }
?>
