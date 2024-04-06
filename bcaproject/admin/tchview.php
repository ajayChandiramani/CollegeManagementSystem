<html>
    <head>
        <title>admin page</title>
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
            margin-top: 100px;
            margin-left: 450px;
            font-size: 25px;  
            font-weight: bold;
            margin-top: 60px;
            font-family: MS UI Gothic;
            height: 500px;
            width: 700px;
            padding-top: 50px;
            padding-left: 100px;
            padding-right: 100px;
            padding-right: 100px;
            border-radius: 40px;
            border-collapse: separate;
            border-spacing: 0 15px;
            background-image:linear-gradient(to right, #B2fef1,#0ed2f7); 
            
        }
        td
        {
            border-right: 2px solid #47c9af; 
            border-top-right-radius: 100px;
            border-bottom-right-radius: 100px;
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
            padding: 5px;
          
        }
        th
        {   
            border-left: 2px solid #47c9af ;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
            border-top-left-radius: 100px;
            border-bottom-left-radius: 100px;
            
        }
        tr
        {
            height: 50px;
            background-color: 47c9af;
            
        }
        tr:hover
        {
            background-image:linear-gradient(to right,#e040fb,#00bcd4);
            color: white;
            cursor: pointer;
            
        }
        

        </style>

    </head>
    <body>
        <?php include "./head.php";
        ?>
        <p class="pt">Teacher Profile</p>
            <hr class="hr">
            
        <?php
        $a=$_GET['id'];
        $con=mysqli_connect("localhost","root","","bcapro");
        $sql="select *from teacherinfo where id=$a";
        $result=mysqli_query($con,$sql);
        echo "<table>";
        while($row=mysqli_fetch_array($result))
        {
                echo "<tr>";
                    echo "<th>First Name:</th>";
                    echo "<td>".$row[1]."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>Middle Name:</th>";
                    echo "<td>".$row[2]."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>Last Name:</th>";
                    echo "<td>".$row[3]."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>Address:</th>";
                    echo "<td>".$row[4]."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>Phone Number:</th>";
                    echo "<td>".$row[5]."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>Email Id:</th>";
                    echo "<td>".$row[6]."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>User Name:</th>"; 
                    echo "<td>".$row[7]."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>Password:</th>";
                    echo "<td>".$row[8]."</td>";
                echo "</tr>";
            }
        echo "</table>";
    ?>
    </body>
</html>