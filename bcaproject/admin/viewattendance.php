//viewattendance.php
<html>
    <head>
        <title>Admin Page</title>
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
   tr:nth-child(2)
   {
      background-color: lighten(#4E5DC4, 35%);
   }
  

        </style>
        <script>
            
        </script>
    </head>
    <?php
        $i=1;
        ?>
       <body> 
<div class="table-users">
        <div class="header">Register Sheet</div>
   
        <?php
            $a=$_POST['date'];
            $b=$_POST['course'];
            echo $a;
            $con=mysqli_connect("localhost","root","","bcapro");
            $sql="select *from $b where date='$a'";
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
                    }
                    else
                    {
                        $temp='red';
                        $ap='Absent';
                    }
                    echo "<tr>";
                    echo "<td style='background-color: $temp;'>".$row['date']."</td>";
                    echo "<td  style='background-color: $temp;'>".$row['enno']."</td>";
                    echo "<td  style='background-color: $temp;'>".$row['fname']."</td>";
                    echo "<td  style='background-color: $temp;'>".$row['contno']."</td>";
                   

                    echo "<td style='background-color: $temp;'>".$ap."</td>";
                    $i++;
                }
            }
            else
            {
                echo "<h1 style='color: red;'>No Record Found</h1>";
            }
        

            ?>


    </table>
    </div>
    </body>


</html>
