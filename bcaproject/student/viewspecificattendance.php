<?php
session_start(); 

if(!isset($_SESSION['unm']))
{
    header("Location:/bcaproject/index.php");
    
}
?>
<html>
    <head>
        <style>
            .header
            {
                background-color: darken(#398B93, 5%);
                color: black;
                font-size: 1.5em;
                padding: 1rem;
                text-align: center;
                text-transform: uppercase;
            }
            .table-users 
            {
                border: 1px solid darken(#398B93, 5%);
                border-radius: 10px;
                box-shadow: 3px 3px 0 rgba(0,0,0,0.1);
                margin-left: 25%;
                overflow: hidden;
                width: 800px;
            }

table {
   width: 100%;
  border-collapse: collapse;
  text-align: left;
  overflow: hidden;
  border-radius: 10px;
  
   }
   
   td
   {
    
    padding: 10px;
    border-left: 1px solid #4ECDC4;
    border-right:1px solid #4ECDC4;
   }
   tr 
   {
      border: 1px solid #4ECDC4;
      color:white;
      border: 4px solid rgba(50, 25, 255, 0.302);
   }
   
   th { 
    background-color: #4ECDC4;
    color:black;
    text-align:center;
   }
        </style>

    </head>
    <body style="background-image: linear-gradient(to right,#2e3192,#1bffff);">
    <?php
    include "./head.php";?>
    <div class="table-users">
        <div class="header"> Your Register Sheet</div>
<?php
if(!isset($_SESSION['unm']))
{

}
else
{
        $present=0;
        $absent=0;
        $temp=array();    
        $j=0;
        $a=$_SESSION['unm'];
        $name="";
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
        $sql="select * from $course where enno='$a'";
        $run=mysqli_query($con,$sql);
        if(mysqli_num_rows($run)>0)
            {
                echo "<div class='container'>";
                echo "<table class='tab'>";
            
                echo "<tr>";
                    echo "<th>Date</th>";
                    echo "<th>Eno. No.</th>";
                    echo "<th>Name</th>";
                    echo "<th>Phone</th>";
                    echo "<th>Present/Absent</th>";
                    
                echo "</tr>";
                while($row=mysqli_fetch_assoc($run))
                {
                    $col=$row['atten'];
                    if($col=="p"||$col=="P")
                    {
                        $temp='green';
                        $ap='Present';
                        $present++;
                    }
                    else
                    {
                        $temp='red';
                        $ap='Absent';
                        $absent++;
                    }
                    echo "<tr>";
                    echo "<td style='background-color: $temp;'>".$row['date']."</td>";
                    echo "<td  style='background-color: $temp;'>".$row['enno']."</td>";
                    echo "<td  style='background-color: $temp;'>".$row['fname']."</td>";
                    echo "<td  style='background-color: $temp;'>".$row['contno']."</td>";
                   

                    echo "<td style='background-color: $temp;'>".$ap."</td>";
                   
                }
                echo "</table>";
                echo "<h1>".$name." you have <i><span style='color:red;font-family:courier new;font-size:40px'>present ".$present."</i></span>  &nbsp;days<br>and <span style='color:darkgreen;font-family:courier new;font-size:40px'>absent ".$absent."</span> days...";
            }
            else
            {
                echo "<h1 style='color: red;'>No Record Found</h1>";
            }
        }
        

        ?>


        </div>
        <?php
        if($absent!=0)
        {
            echo "<h2 style='color:red'>Because you are was absent ".$absent." days plese cover your losing part </h2>";
        
        }
        ?>
        </body>
    
    
    </html>
    