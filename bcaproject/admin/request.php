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
        body
        {
            background-color: #e8f5ff;
        }
    </style>
    <body>
        <?php include "./head.php"?>
        <p class="pt">Requested Student id</p>
        <hr class="hr">
        
        
    </body>
</html>
<?php
    $con=mysqli_connect("localhost","root","","bcapro");
    $sql="select *from temp";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)>0)
    {

        echo "<div class='container'>";
        echo "<form action='approve.php' method='post'>";
        echo "<table class='tab' enctype='multipart/form-data'>";
        
        echo "<tr>";
        echo "<th>En. No</th>";
        echo "<th>Name</th>";
        echo "<th>Gender</th>";
        echo "<th>Address</th>";
        echo "<th>Contact No.</th>";
        echo "<th>Course</th>";
        echo "<th>Approve</th>";
     
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
            echo "<td><a href='approve.php?id=$row[id]'><input class='btnedit' type='button' value='Approve'></a>
                </td>";
            echo "</tr>";
        }
       
        echo "</tr>";
        echo "</table>";
        echo "</form>";


        echo "</div>";
    }
    else
    {
        echo "Zero rows";
        echo "<a href='addstud.php'> <input type='button' class='addst' value='Add Student'></a>";  

    }
?>
    
        