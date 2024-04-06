<?php
session_start(); 

if(!isset($_SESSION['unm']))
{
    header("Location:/bcaproject/index.php");
}
?><html>
    <head>
        <title>admin page</title>
    </head>
    <style>
        .pt
        {
            font-size: 40px;
            margin-top: 30px;
            margin-bottom: 50px;
            font-family:MS UI Gothic;
            text-align: center;
            font-weight: 1000;
        }
        .hr
        {
            color: gray;
            height: 1px;
            background-color: gray;
            margin-left: 200px;
            margin-right: 200px;
            margin-top: -30px;
            opacity: 30%;
        }
        .div
        {
            margin-left: 700px;
            height: 30px;
            width: 200px;
            font-size:25px;
            font-weight: 900;
        }
        table
        {

            margin-top: 80px;
            background-image:linear-gradient(to right, #B2fef1,#0ed2f7); 
            height: 500px;
            width: 900px;
            border: 3px solid #47c9af;
            border-radius: 30px;
            

        }
        input
        {
            border-radius: 10px;
            border: 3px solid #47c9af;
            font-size: 20px;
            text-align: center;
            
        }
        th
        {
            font-size: 25px;
            margin-top: 500px;
            

        }
        .savebtn
        {
            margin-left:400px;
            cursor: pointer;
            font-size: 20px;
            border-radius: 10px;
            height: 40px;
            width: 100px;
            margin-top: 50px;
            background-color: #663399;
            color: white;
        }
        .prebtn
        {
            background-color: green; 
            font-size: 18px;
            width: 100px;
            border-radius: 10px;
             color: white;
        }
    </style>
    <script>
        function col(event)
        {   
        
            var color=event.value;
            if(color=="Absent")
            {
                var col=event.value;
                event.style.backgroundColor="red";
            }
            else
            {
                event.style.backgroundColor="green";
            }
            
        }
        
    </script>
    <body>
        <?php include "./head.php"?>
        <p class="pt">Today's Attendance</p>
        <hr class="hr">
            <?php 
            
            $date=date('d/m/Y');
            echo "<form method='post' action='present.php'>";

    
                $con=mysqli_connect("localhost","root","","bcapro");
                $sql="select *from stud";
                $run=mysqli_query($con,$sql);
                if(mysqli_num_rows($run)>0)
                {
                    echo "<center>";
                    echo "<table class='tab'>";
                    echo "<tr>";
                        echo "<td colspan='4'><div class='div'>Date: $date
                        </div></td>";
                    
                    echo "<tr>";
                    echo "<th>Date</th>";   
                    echo "<th>En. No</th>";
                    echo "<th>Name</th>";
                    echo "<th>Course</th>";

                    echo "</tr>";
                    
                    $i=1;
                    while($row=mysqli_fetch_assoc($run))
                    {
                            $enno=$row['enno'];
                            $fname=$row['fname'];
                            $course=$row['course'];
                            $rb=$i."btn";//unique radiobutton
                            echo "<tr>";
                            echo "<td>
                                <input type='text' value=$date readonly='true' name='date'>
                            </td>";
                            echo "<td>
                                <input type='text' value=$enno readonly='true' name='enno[]'>
                            </td>";
                            echo "<td>
                                <input type='text' value=$fname readonly='true' name='fname[]'>
                            </td>";
                            echo "<td>
                                <select name='att[]' id='att' class='prebtn' onchange='col(this)'>
                                    <option value='Present'>Present</option>
                                    <option value='Absent'>Absent</option>
                                </select>
                            </td>";

                            echo "</tr>";
                            $i++;
                    }
                    echo "</center>";
                }
                else
                {
                    echo "Zero rows";
                }
        ?>
                <tr>
                    <td colspan="4"><input type="submit" class="savebtn"value="Save"></td>
                </tr>

        
        </table>
        </form>
        
    <script>
    </script>  

    </body>
</html>