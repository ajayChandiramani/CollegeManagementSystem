<?php
session_start(); 

if(!isset($_SESSION['unm']))
{
    header("Location:/bcaproject/index.php");
    
}?>
<html>
    <head>
        <title>Student Page</title>
        <style>
            .main
            {
                background-color: red;
                margin-top: 50px;
                margin-left: 200px;
                margin-right: 200px;
                padding: 20px;
                border-radius: 50px;
                border: 2px solid white;
                box-shadow: 8px 8px 60px black;
            
            }   
            label
            {
                font-size: 25px;
                font-weight: 700;
            }
            span
            {
                color: red;
                font-size: 25px;
                font-weight: 700;

            }
            i{
                padding-top: 400px;
            }

        </style>
    </head>
    <body style="background-image: linear-gradient(to right,#2e3192,#1bffff);">
    <form action="uploadurhw.php" enctype="multipart/form-data" method="post">
<?php    
if(isset($_SESSION['unm']))
{
    $a=$_SESSION['unm'];
    include "./head.php";
    $name=$_SESSION['unm'];
    $con=mysqli_connect("localhost","root","","bcapro");
    $sql="select *from stud where unm='$a'";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)>0)
    {
        while($row=mysqli_fetch_assoc($run))    
        {
            $a=$row['enno'];    
            $name=$row['fname'];
            $course=$row['course'];
        }
    }
    $sql="select *from hw where course='$course'";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)>0)
    {
        while($row=mysqli_fetch_assoc($run))
        {
            echo "<form action='uploadurhw.php' enctype='multipart/form-data' method='post'>";
            echo "<div class='main' style='background-image: linear-gradient(to right,#e0eafc,#cfdef3);'>";
            echo "<label>Post Date:-</label><span>".$pdate=$row['postdate']."</span><br><br>";
            echo "<label>Submission Date:-</label><span>".$sdate=$row['subdate']."</span><br><br>";
            echo "<label>Course:-</label><span>".$course=$row['course']."</span><br><br>";
            echo "<label>Subject:-</label><span>".$sub=$row['subject']."</span><br><br>";
            echo "<label>Description:-</label><span>".$des=$row['Description']."</span><br><br>";
            echo "<label>Upload your Homework:-</label>";
            echo "<input type='file' name='hw'><br><br>";
            echo "<input type='hidden' name='eno' value=$a>";
            echo "<input type='hidden' name='name' value=$name>";
            
            echo "<input type='submit'>";
            echo "</div>";
            echo "</form>";
        }
            
    }
    
    
        

}
?>
    </form>
    </body>

