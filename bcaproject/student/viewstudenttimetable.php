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
                    <style>
            .tt
            {
                background-color: #47c9af;
                font-size: 20px;
                height: 50px;
                width: 250px;
                font-family: Open Sans;
                box-shadow: 1px 2px;
                cursor: pointer;
                margin-top: 50px;
                margin-left: 300px;
                border-radius: 5px;
            }
            p
            {
                font-family: 'Dancing Script', cursive;
                margin-left: 40%;
                font-size: 30px;
            }
            hr
            {
                color: gray;
                height: 1px;
                background-color: gray;
                margin-left: 200px;
                margin-right: 200px;
                margin-top: -30px;
                opacity: 30%;
            }
    table
    {
      border-radius: 20px;
      padding: 20px;
      margin-top: 100px;
      
      box-shadow: 5px 5px 30px black;
      margin-left: 400px;
      border-collapse: collapse;

    }
    th
    {
        background-color: black;
        color: white;
        font-size: 18px;
        padding: 15px;
    }
    td
    {
      padding: 12px;
      font-size: 18px;
      font-weight: 500;
      border-right: 1px solid black;

    }
        </style>
    </head>
    <body style="background-image: linear-gradient(to right,#2e3192,#1bffff);">
    <?php
if(isset($_SESSION['unm']))
{
    $course="";
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
    echo "<p>Curren't TimeTable</p>";
        echo "<hr>";
        echo "<div class='tbody'>";
            echo "<table class='table' style='background-image: linear-gradient(to right,#93a5cf,#c2dba2);'>
          <tr>
            <thead>
            <th>Day</th>
            <th>Teacher Name</th>
            <th>Subject Name</th>
            <th>Class Name</th>
            <th>Starting Time</th>
            <th>Ending Time</th>
            <th>Remove</th>
            </thead>
          </tr>";
      $sql = "Select * from tt";
      $result = mysqli_query($con, $sql);
      if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_array($result)) {
              echo "<tr><td>" . $row["day"]. "</td><td>" . $row["tname"]. "</td><td>" . $row["subject"] . "</td><td>" . $row["classnm"] . "</td>
              <td>". $row["starttime"] . "</td><td>" . $row["endtime"]. "</td>";
              echo "<td><a href='deletetimetable.php?id=$row[id]'><input class='btndel' type='button' value='Delete'></a>
              </td>";
          
          }
          echo "</table>";

      

        }
    
}
?>
