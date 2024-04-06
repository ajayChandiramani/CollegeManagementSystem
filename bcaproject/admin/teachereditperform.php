<?php
$id=$_POST['id'];
$a=$_POST['fname'];
$b=$_POST['mname'];
$c=$_POST['lname'];
$d=$_POST['addr'];
$e=$_POST['pnumber'];
$f=$_POST['email'];
$g=$_POST['uname'];
$h=$_POST['pass'];   
echo $a;
$con=mysqli_connect("localhost","root","","bcapro");
           /* $sql="update teacherinfo set fname='$a',mname='$b',lname='$c',addr='$d',pnumber='$e',
                email='$f',uname='$g',pass='$h' where id=$id";
              $run=mysqli_query($con,$sql) or die("Not insert data into database".mysqli_errno($con));
        if($run)
        {
            echo "Successfully update data <a href='teacherinfo.php'>Updated........</a><br>";
        }  */ 
        $dsql="update teacher set username='$g',password='$h' where id=13";
        $drun=mysqli_query($con,$dsql) or die("Not insert data into teacher database".mysqli_errno($con));
        if($drun)
        {
            echo "done";
        }
?>
