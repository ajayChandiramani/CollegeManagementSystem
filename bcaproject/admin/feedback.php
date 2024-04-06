<?php
include "./head.php";?>
<html>
    <head>
        <title>Admin Page</title>
        <style>
            .title
    {
        font-family: 'Dancing Script', cursive;
        margin-left: 600px;
    }
             .main
            {
                border: 1px solid red;
                margin-left: 30%;
                margin-top: 20px;
                width:600px;
                border-radius: 25px;
                padding: 20px;
    background-image: linear-gradient(to right,#2e3192,#1bffff);
            }   
            label
            {
                
                font-family: 'Josefin Sans', sans-serif;
                color:black;
                font-size: 20px;
                font-weight: 700;
            }
            span
            {
                color:white;
        font-family: 'Dancing Script', cursive;
                
                font-size: 18px;

            }
            .remove
            {
                height: 30px;
                width: 80px;
                background-color:red;
                border-radius: 8px;
                cursor:pointer;
                color:white;    
            }
            

        </style>
        

    </head>
    <body>
        
    <div class="title">
                <h1>List Of Feedbacks</h1>
    </div>
    <?php
            $con=mysqli_connect("localhost","root","","bcapro");
            $sql="select *from feedback";
            $run=mysqli_query($con,$sql);
            if(mysqli_num_rows($run)>0)
            {
                echo "<div class='card'>";
                while($row=mysqli_fetch_assoc($run))
                {
                    echo "<div class='main'>";

                    echo "<label> Username:- </label><span>".$row['unm']."</span><br><br>";
                    echo "<label> First Name:- </label><span>".$row['fname']."</span><br><br>";
                    echo "<label> Last Name:- </label><span>".$row['lname']."</span><br><br>";
                    echo "<label> Contact No:- </label><span>".$row['contno']."</span><br><br>";
                    echo "<label> Feedback:- </label><span>".$row['feed']."</span><br><br>";
                    echo "<label> Rating:- </label><span>".$row['rating']."/10</span><br><br>";
                    echo "</div>";
                }
                echo "</div>";


            }
            else
            {
            }
        ?>  


    </body>
</html>

    
    
    