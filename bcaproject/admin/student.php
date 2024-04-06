<?php
session_start(); 
if(!isset($_SESSION['unm']))
{
    header("Location:/bcaproject/index.php");
}
?>
<html>
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
        table
	    {
		    margin: 0;
		    background: linear-gradient(to right,#8e2de2,#4a00e0);
		    font-family: sans-serif;
		    font-weight: 100;
            text-align:center;
		    width: 900px;
		    border-collapse: collapse;
		    overflow: hidden;
            border-radius: 10px;
		    box-shadow: 0 0 20px rgba(0,0,0,0.1);
            
	    }

	    .container
	    {
		    position: absolute;
            top:70%;
		    left: 50%;
		    transform: translate(-50%, -50%);	
	    }
	    th,td
	    {
		    background-color: rgba(255,255,255,0.2);
		    color: #fff;
	    }
	    th
	    {
		    text-align: center;
		    background-color: #55608f;
	    }
	    tr:hover
            {
                background-color: rgba(255, 255, 255,    0.302);
           
    	}
    	th:hover
    	{
    		background-color: rgba(255,255,255,0.2);
    	}
    	td:hover 
    	{

    		background-color: rgb(190, 53, 176);
            color: black;
            font-weight: 700;
            box-shadow: #318b6e33 -1px 1px,#318b6e33 -8px 8px,
            #318b6e33 -3px 3px,#318b6e33 -4px 4px ,#318b6e33 -5px 5px,#318b6e33 -6px 6px;   
        }
	    .btnedit
        {
            background-color: #47c9af;
            margin-left: 10px;
            border-radius: 8px;
            cursor:pointer;
            
        }
        .btnview
        {
            background-color: #47c9af;
            border-radius: 8px;
            cursor:pointer;
            
        }
        .btndel
        {
            background-color:red;
            border-radius: 8px;
            cursor:pointer;
            margin-left: 5px;
            color:white;    
            
        }
        .addst
        {
            margin-left: 30px;
            cursor: pointer;
            font-size: 22px;
            border-radius: 10px;
            height: 40px;
            width: 150px;
            background-color: #5bc0de;
 
        }
        .request
        {
                background-color: #47c9af;
                font-size: 20px;
                height: 50px;
                width: 250px;
                font-family: Open Sans;
                box-shadow: 1px 2px;
                cursor: pointer;
                margin-top: -200px;
                margin-bottom: 100px;
                margin-left: 600px;
                border-radius: 5px;
        }
        body
        {
   background-image: linear-gradient(#b993d6,#8ca6db);
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }
        .footer
        {
            margin-top: 549px;
        }
    </style>
    <body>
        <?php include "./head.php"?>
        <p class="pt">List Of Student</p>
        <hr class="hr">
        <?php
    $con=mysqli_connect("localhost","root","","bcapro");
    $sql="select *from stud";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)>0)
    {
        echo "<div class='container'>";
        echo "<a href='request.php'><input type='button' value='Request' class='request'></a>";
        echo "<table class='tab' enctype='multipart/form-data'>";
        
        echo "<tr>";
        echo "<th>En. No</th>";
        echo "<th>Name</th>";
        echo "<th>Gender</th>";
        echo "<th>Address</th>";
        echo "<th>Contact No.</th>";
        echo "<th>Course</th>";
        echo "<th>View / Edit</th>";
        echo "<th>Remove</th>";
     
        echo "</tr>";
        while($row=mysqli_fetch_assoc($run))
        {
            echo "<tr>";
            echo "<td>".$row['enno']."</td>";
            echo "<td>".$row['fname']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>".$row['addr']."</td>";
            
            echo "<td>".$row['contno']."</td>";
            echo "<td>".$row['course']."</td>";
            echo "<td><a href='viewstud.php?id=$row[id]'><input class='btnview' type='submit' value='View'></a>
                <a href='editstud.php?id=$row[id]'><input class='btnedit' type='submit' value='edit'></a>
                </td>";
                echo "<td><a href='delete.php?en=$row[enno]'><input class='btndel' type='button' value='Delete'></a>
                </td>";
            
            echo "</tr>";
        }
        echo "<tr>";
            echo "<td style='height: 100px; text-align:left;' colspan='9'><a href='addstud.php'> <input type='button' class='addst' value='Add Student'></a>
            </td>";

        echo "</tr>";
        echo "</table>";


        echo "</div>";
    }
    else
    {
        echo "Zero rows";
        echo "<a href='addstud.php'> <input type='button' class='addst' value='Add Student'></a>";  

    }
?>

<footer>
            <div class="footer">
                <?php include "../footer.php";?>
            </div>
        </footer>
</body>
</html>


    
        