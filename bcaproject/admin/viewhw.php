//viewhw.php
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
                margin: 20px;
                border-radius: 50px;
                padding: 20px;
                background: linear-gradient(to right,#8e2de2,#4a00e0);
            }   
            label
            {
                font-size: 20px;
                font-weight: 700;
            }
            span
            {
                color: white;
                
                font-size: 18px;
                font-weight: 700;

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
                <h1>List Of HomeWork's</h1>
            </div>
    
        <?php
            $con=mysqli_connect("localhost","root","","bcapro");
            $sql="select *from hw";
            $run=mysqli_query($con,$sql);
            if(mysqli_num_rows($run)>0)
            {
                while($row=mysqli_fetch_assoc($run))
                {
                    $id=$row['id'];
                    echo "<div class='main'>";
                    echo "<a href='removehw.php?id=$id'><input type='button'class='remove' value='Remove'></a><br><br>";
                    echo "<label> Post date:- </label><span>".$row['postdate']."</span><br><br>";
                    echo "<label> Submission date:- </label><span>".$row['subdate']."</span><br><br>";
                    echo "<label> Subject:- </label><span>".$row['subject']."</span><br><br>";
                    echo "<label> Description:- </label><span>".$row['Description']."</span>";
                    echo "</div>";
                }
        


            }
            else
            {
            }
        ?>  


    </body>
</html>

    