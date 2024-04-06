<?php
    $con=mysqli_connect("localhost","root","","bcapro");
    $sql="select studphoto from stud where id=11";
    $run=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($run))
    {
         $f= $row['studphoto'];
    }
    ?>
