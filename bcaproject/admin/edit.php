<?php
$id=$_POST['id'];
$a=$_POST['enno'];
$b=$_POST['fname'];
$c=$_POST['lname'];
$d=$_POST['mname'];
$e=$_POST['addr'];
$f=$_POST['gen'];
$g=$_POST['birdate'];
$h=$_POST['age'];   
$i=$_POST['mob'];
$j=$_POST['course'];
$k=$_POST['sem'];
$uniq=time().uniqid(rand()).'.jpg';
$file_name=$_FILES['image']['name'];
$file_tmp=$_FILES['image']['tmp_name'];
$folder="studentpic/".$uniq;
$m=$folder;
echo $a;
$date=date('m/d/Y');
$con=mysqli_connect("localhost","root","","bcapro");
            $sql="update stud set fname='$b',lname='$c',mname='$d',addr='$e',gender='$f',
                birthdate='$g',age='$h',contno='$i',course='$j',sem='$k',studphoto='$m' where id=$id";
              $run=mysqli_query($con,$sql) or die("Not insert data into database".mysqli_errno($con));
        if($run)
        {
            echo "Successfully insert data <a href='student.php'>Updated........</a><br>";
            move_uploaded_file($file_tmp,"studentpic/".$uniq);
    }
?>
